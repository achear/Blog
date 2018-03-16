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
        //return 123;
        $data = $request->except('_token','email');
        //return $data;
        //$data = json_decode($data,true);
        //return $data;
        $commit = new Comment;
        $commit->user_id = $data['user_id'];
        if ($data['username']) {
            $commit->user_name = $data['username'];
        }
        $commit->commit_id = $data['commit_id'];
        $commit->commit_content = $data['commit_content'];

        $res = $commit->save();

        if ($res) {
            //0代表评论成功，1代表失败
            $data['status'] = 0;
        } else {
            $data['status'] = 1;
        }
        return $data;
    }
}
