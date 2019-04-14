<?php
namespace App\Http\Controllers\AdminPanel;

use Illuminate\Http\Request;
use App\Video;
use App\User;
use App\Comment;
use App\ReplyComment;
use App\Http\Controllers\Controller;

class AdminPages extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.index');
    }

    public function videos()

    {
        $allv = Video::all();
        
        return view('admin.videos',['allv'=>$allv]);
    }

    public function users()
    {
        $allu = User::all();
        return view('admin.users',['allu'=>$allu]);
    }

    public function flagVideos()
    {
        return view('admin.flag-videos');
    }
    public function comments()
    {
        $c= Comment::with('video')->get();
       return view('admin.comments',['c'=>$c]);
    }
}

