<?php

namespace App\Http\Controllers;

use App;
use App\EditRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use View;

class RequestsController extends Controller
{
	public function index() {
		$data['requests'] = EditRequest::where('done', 0)->orderBy('upvotes', 'DESC')->paginate(15);
		return View::make('requests.index', $data);
	}

	public function add() {
		if (Auth::check()) {
			return View::make('requests.add');
		} else {
			return redirect()->action('RequestsController@index');
		}
	}

	public function store(Request $request) {
		$req = new EditRequest();
		$req->previews = implode(';', $request->previews);
		$req->message = $request->message;
		$req->date = date('Y-m-d');
		$req->user_id = Auth::user()->id;
		$req->upvotes = 0;
		$req->done = 0;
		$req->save();
		return redirect()->action('RequestsController@index');
	}

	public function upvote(Request $request) {
		if($request->user_id != NULL) { #if user is logged in
			$user = User::find($request->user_id);
			$requests_upvoted = explode(';', $user->requests_upvoted);
			$req = EditRequest::find($request->request_id);
			if(!in_array($request->request_id, $requests_upvoted)) { #if user didn't upvote the post already
				array_push($requests_upvoted, $request->request_id);
				$user->requests_upvoted = implode(';', $requests_upvoted);
				$user->save();
				$req->upvotes++;
				$req->save();
				return response($req->upvotes);
			} else {
				if (($key = array_search($req->id, $requests_upvoted)) !== false) {
				    unset($requests_upvoted[$key]);
				}
				$user->requests_upvoted = implode(';', $requests_upvoted);
				$user->save();
				$req->upvotes--;
				$req->save();
				return response($req->upvotes);
			}
		} else {
			return response("logged-out");
		}
	}

}