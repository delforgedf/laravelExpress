<?php

namespace App\Http\Controllers;

use App\Tags;
use App\Http\Requests;


class PostsAdminController extends Controller
{
    public function __construct(Tags $tags)
    {
        $this->tags = $tags;
    }

    public function index()
    {

        $tags = $this->tags->paginate(3);

        return view('admin.posts.index', compact('tags'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }
}
