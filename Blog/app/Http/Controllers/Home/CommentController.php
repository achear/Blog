<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Model\Comment;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function create(Request $request)
    {
        $data = $request->except('_token','email');
        //dd($data);
        $commit = new Comment;
        $commit->user_id = $data['user_id'];
        $commit->user_name = $data['username'];
        $commit->commit_id = $data['commit_id'];
        $commit->commit_content = $data['commit_content'];

        $res = $commit->save();

        if ($res) {
            return 1;
        } else {
            return 0;
        }
    }
}
