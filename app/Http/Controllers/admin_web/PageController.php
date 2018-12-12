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
}
