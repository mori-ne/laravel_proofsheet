<?php

namespace App\Http\Controllers\FormUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projects;

class FormUserController extends Controller
{

    public function index()
    {
        abort(404, 'Page not found');
    }


    public function login($formuser)
    {
        $user = Projects::where('unique_id', $formuser)->first();

        // 公開・非公開フラグ
        // $project = Projects::where('unique_id', $formuser)->first();
        if ($user && $user->status == 0) {
            abort(404, 'Page not found');
        }

        // ユーザーが見つからない場合は 404 エラーを表示
        if (!$user) {
            abort(404, 'User not found');
        }

        // ビューにデータを渡す
        return view('formuser.login', compact('user'));
    }

    // public function  show(){

}
