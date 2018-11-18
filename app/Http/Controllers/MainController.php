<?php

namespace App\Http\Controllers;

use App;
use App\Edit;
use App\Category;
use App\Comment;
use App\PrivateMessage;
use Response;
use DB;
use View;
use Redirect;
use Illuminate\Http\Request;
use Auth;

class MainController extends Controller
{

	public function index() {
		$mvp = Edit::get();
		$mvp = $mvp->sortByDesc('views');
		$mvp = $mvp->slice(0, 12);
		$data['mvp'] = $mvp;
		return View::make('index', $data);
	}

	public function search($words) {
		$search_results = [];
		$edits = Edit::get();
		$tokens = explode('-', $words);
		foreach($edits as $edit) {
			foreach ($tokens as $token) {
				if(strpos(strtolower($edit->title), strtolower($token)) !== false) {
					array_push($search_results, $edit);
				}
			}
		}
		$search_query = str_replace('-', ' ', $words);
		$data['edits'] = array_unique($search_results); // removes duplicate posts
		$data['search_words'] = $search_query;
		return View::make('search', $data);
	}

	public function toggleMemes() {
		if(Auth::user()->enable_memes == 1) {
			Auth::user()->enable_memes = 0;
		} else {
			Auth::user()->enable_memes = 1;
		}
		Auth::user()->save();
		return Redirect::back();
	}

	public function sendPM() {
		return View::make('send-pm');
	}

	public function storePM(Request $request) {
		$msg = new PrivateMessage();
		$msg->message = $request->message;
		$msg->user_id = Auth::user()->id;
		$msg->date = date('Y-m-d');
		$msg->is_read = 0;
		$msg->save();
		return back()->with('status', 'PM successfully sent');
	}

	public function privacyPolicy() {
		$data = [];
		return View::make('privacy-policy', $data);
	}

	public function termsAndConditions() {
		$data = [];
		return View::make('terms-and-conditions', $data);
	}

	public function welcome() {
		return View::make('welcome');
	}

}