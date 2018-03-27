<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Events\ChatEvent;
use Illuminate\Http\Request;


class ChatController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function chat()
    {
    	return view('chat');
    }

    public function send(Request $request)
    {
        return $request->all();
    	$user = User::find(Auth::id());
    	event(new ChatEvent($request->message, $user));
    }

    // public function send()
    // {
    // 	$message = "Hello World!";
    // 	$user = User::find(Auth::id());
    // 	event(new ChatEvent($message, $user));
    // }
}
