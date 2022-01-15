<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index(){
        $posts=DB::table('posts')->
                   where('category_id','3')->
                   orderByDesc('created_at')->
                   take(4)->
                   get();
        $newPosts=DB::table('posts')->
                      orderByDesc('created_at')->
                      take(4)->
                      get();
        $lastroyalpost=DB::table('posts')->where('category_id','4')->orderByDesc('created_at')->take(1)->get();
        $royals=DB::table('posts')->where('category_id','4')->where('id','<>',$lastroyalpost[0]->id)->take(3)->get();
        
        return view('home')->with([
            'newposts'=>$newPosts,
            'posts'=>$posts,
            'royals'=>$royals,
            'lastroyalpost'=>$lastroyalpost
        ]);
    }
}
