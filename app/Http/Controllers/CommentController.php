<?php

namespace App\Http\Controllers;

use App\Events\CommentEvent;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('chat');
    }

    public function send(request $request)
    {
        $user = User::find(Auth::id());
        event(new CommentEvent($request->message, $user));
    }

    // public function send()
    // {
    //     $message = 'Testing Pusher';
    //     $user = User::find(Auth::id());
    //     event(new CommentEvent($message, $user));
    // }
}
