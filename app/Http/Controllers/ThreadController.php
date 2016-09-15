<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\Thread;

class ThreadController extends Controller
{
    public function showForm()
    {
        return view('thread/form');
    }

    public function create(Request $req)
    {
        $user = Auth::user();
        // dd($user);
        $title = $req->get('title');
        $body = $req->get('body');
        $thread = new Thread([
            'body' => $body,
            'title' => $title
        ]);
        $user->threads()->save($thread);
        return $thread;
    }
}