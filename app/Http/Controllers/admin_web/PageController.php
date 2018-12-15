<?php

namespace App\Http\Controllers\admin_web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function blog()
    {
        $posts = DB::table('posts')
        ->orderBy('id_post', 'DESC')
        ->where('status', 'PUBLISHED')
        ->paginate(2);

        return response()->json($posts, 201);
    }

    public function blogDetails(Request $request)
    {
        $post = DB::table('posts')
        ->where('id_post', request('id'))
        ->first();

        return response()->json($post, 201);
    }

    public function offerts()
    {
        $offerts = DB::table('posts')
        ->where('except', 1)
        ->get();

        return response()->json($offerts, 201);
    }
}
