<?php

namespace App\Http\Controllers;

use App;
use App\Edit;
use App\Category;
use App\Comment;
use App\User;
use App\Club;
use Response;
use DB;
use View;
use Illuminate\Http\Request;
use Redirect;

class EditsController extends Controller
{

	public function index($version, $category) {
		$category = Category::where('slug', $category)->first();
		$edits = Edit::where('version', $version)->where('category_id', $category->id)->paginate(20);
		$data['edits'] = $edits;
		$data['version'] = $version;
		$data['category'] = $category->name;
		return View::make('posts.index', $data);
	}

	public function seePost($version, $category, $edit_slug) {
		$cat = Category::where('slug', $category)->first();
		$edit = Edit::where('version', $version)->where('category_id', $cat->id)->where('slug',$edit_slug)->first();
		$comments = Comment::where('edit_id', $edit->id)->paginate(5);
		$data['edit'] = $edit;
		$data['keywords'] = explode(';', $edit->keywords);
		$data['comments'] = $comments;
		$data['version'] = $version;
		$data['other_posts'] = Edit::where('version', $version)->inRandomOrder()->paginate(4);
		//Data count
		//$edit->views++;
		$edit->save();
		return View::make('posts.post', $data);
	}

	public function postComment(Request $request) {
		$comment = new Comment();
		$comment->message = $request->message;
		$comment->date = date('Y-m-d');
		$comment->user_id = $request->user()->id;
		$comment->edit_id = Edit::where('title', $request->title)->first()->id;
		$comment->save();
		return Redirect::back();
	}

	public function keywords($keyword) {
		//Unslug
		$keyword = ucwords(str_replace('-', ' ', $keyword));
		$edits = Edit::get();
		$keyword_results = [];
		//Get list of edits and push to array the ones that contain keyword
		foreach ($edits as $edit) {
			if(strpos(strtolower($edit->keywords), strtolower($keyword)) !== false) {
				array_push($keyword_results, $edit);
			}
		}
		//Append to html
		$data['edits'] = $keyword_results;
		$data['keyword'] = $keyword;
		return View::make('keywords', $data);
	}

	public function upvote(Request $request) {
		if($request->user_id != NULL) { #if user is logged in
			$user = User::find($request->user_id);
			$posts_upvoted = explode(';', $user->posts_upvoted);
			$edit = Edit::find($request->edit_id);
			if(!in_array($request->edit_id, $posts_upvoted)) { #if user didn't upvote the post already
				array_push($posts_upvoted, $request->edit_id);
				$user->posts_upvoted = implode(';', $posts_upvoted);
				$user->save();
				$edit->upvotes++;
				$edit->save();
				return response($edit->upvotes);
			} else {
				if (($key = array_search($edit->id, $posts_upvoted)) !== false) {
					unset($posts_upvoted[$key]);
				}
				$user->posts_upvoted = implode(';', $posts_upvoted);
				$user->save();
				$edit->upvotes--;
				$edit->save();
				return response($edit->upvotes);
			}
		} else {
			return response("logged-out");
		}
	}

	public function mvp($version) {
		$data['version'] = $version;
		$mvp = Edit::where('version', $version)->get();
		$mvp = $mvp->sortByDesc('views');
		$mvp = $mvp->slice(0, 12);
		$data['mvp'] = $mvp;
		return View::make('posts.mvp', $data);
	}

	public function browseByClub() {
		$clubs = Club::get();
		$data['clubs'] = $clubs;
		$countries = [];
		foreach ($clubs as $club) {
			if(!in_array($club->country, $countries)) {
				array_push($countries, $club->country);
			}
		}
		$data['countries'] = $countries;
		return View::make('browse.clubs', $data);
	}

	public function tools($version) {
		switch ($version) {
			case 2014:
				return View::make('tools.pes2014');
				break;
			case 2015:
				$data['previews1'] = ['https://image.ibb.co/eJjDop/pes_2015_multi_selector_tool_1.png',
										'https://image.ibb.co/ghqVZU/pes_2015_multi_selector_tool_2.png',
										'https://image.ibb.co/c7L8M9/pes_2015_multi_selector_tool_3.png',
										'https://image.ibb.co/mtov19/pes_2015_multi_selector_tool_4.png',
										'https://image.ibb.co/iw64uU/pes_2015_multi_selector_tool_5.png',
										'https://image.ibb.co/hQKJM9/pes_2015_multi_selector_tool_6.png',
										'https://image.ibb.co/bGVfZU/pes_2015_multi_selector_tool_7.png',
										'https://image.ibb.co/cZRb8p/pes_2015_multi_selector_tool_8.png'];
				$data['previews2'] = ['https://image.ibb.co/dBeFZU/pes_2015_multi_selector_tool_1_1_0_1.png',
										'https://image.ibb.co/eMsDM9/pes_2015_multi_selector_tool_1_1_0_2.png',
										'https://image.ibb.co/mBNr8p/pes_2015_multi_selector_tool_1_1_0_3.png',
										'https://image.ibb.co/daAdop/pes_2015_multi_selector_tool_1_1_0_4.png',
										'https://image.ibb.co/fn6Jop/pes_2015_multi_selector_tool_1_1_0_5.png',
										'https://image.ibb.co/jReFZU/pes_2015_multi_selector_tool_1_1_0_6.png',
										'https://image.ibb.co/bT2r8p/pes_2015_multi_selector_tool_1_1_0_7.png',
										'https://image.ibb.co/iYB7g9/pes_2015_multi_selector_tool_1_1_0_8.png',
										'https://image.ibb.co/dQKtM9/pes_2015_multi_selector_tool_1_1_0_9.png',
										'https://image.ibb.co/cHUSg9/pes_2015_multi_selector_tool_1_1_0_10.png',
										'https://image.ibb.co/esdaZU/pes_2015_multi_selector_tool_1_1_0_11.png',
										'https://image.ibb.co/jXuFZU/pes_2015_multi_selector_tool_1_1_0_12.png',
										'https://image.ibb.co/h64FZU/pes_2015_multi_selector_tool_1_1_0_13.png',
										'https://image.ibb.co/m62PTp/pes_2015_multi_selector_tool_1_1_0_14.png',
										'https://image.ibb.co/m0s2EU/pes_2015_multi_selector_tool_1_1_0_15.png',
										'https://image.ibb.co/gbZtM9/pes_2015_multi_selector_tool_1_1_0_16.png',
										'https://image.ibb.co/g0ZhEU/pes_2015_multi_selector_tool_1_1_0_17.png',
										'https://image.ibb.co/j6W7g9/pes_2015_multi_selector_tool_1_1_0_18.png'];
				return View::make('tools.pes2015', $data);
				break;
			case 2017:
				return View::make('tools.pes2017');
				break;
			case 2018:
				return View::make('tools.pes2018');
				break;
			default:
				return Redirect::back();
				break;
		}
	}

	public function pumm() {
		return View::make('tools.pumm.index');
	}

	/* PES Ultimate Mod Manager Guides */
	public function pummCreate() {
		return View::make('tools.pumm.create');
	}

	public function pummAssociate() {
		return View::make('tools.pumm.associate');
	}

	public function pummEdit() {
		return View::make('tools.pumm.edit');
	}

	public function pummDelete() {
		return View::make('tools.pumm.delete');
	}

	public function pummGenerate() {
		return View::make('tools.pumm.generate');
	}

	public function pummImportExport() {
		return View::make('tools.pumm.import-export');
	}
}