<?php

namespace App\Http\Controllers\FormUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projects;

class FormUserController extends Controller
{

    public function index()
    {
        return view('formuser.index');
    }


    public function show($formuser)
    {
        $user = Projects::where('unique_id', $formuser)->first();

        // 公開・非公開フラグ
        $project = Projects::where('unique_id', $formuser)->first();
        if ($project && $project->status == 0) {
            abort(404, 'Page not found');
        }

        // ユーザーが見つからない場合は 404 エラーを表示
        if (!$user) {
            abort(404, 'User not found');
        }

        // ビューにデータを渡す
        return view('formuser.show', compact('user'));
    }
}
