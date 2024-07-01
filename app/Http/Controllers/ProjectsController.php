<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    // 一覧表示
    public function index()
    {
        $posts = Projects::all();
        return view('dashboard')->with('posts', $posts);
    }

    // 新規作成ページ
    public function create()
    {
        return view('dashboard.create');
    }

    // 新規作成
    public function store(Request $request)
    {
        //
    }

    // 個別ページ
    public function show($id)
    {
        $post = Projects::with('form')->findOrFail($id);
        return view('dashboard.show', compact('post'));
    }

    // 編集ページ
    public function edit(Projects $projects)
    {
        //
    }

    // 更新処理
    public function update(Request $request, Projects $projects)
    {
        //
    }

    // 削除処理
    public function destroy($id)
    {
        $deleteProjectId = Projects::find($id);

        // 削除するデータがなければ
        if (!$deleteProjectId) {
            return redirect()->back()->with('error', '削除するプロジェクトがありませんでした');
        }
        Projects::destroy($id);
        return redirect()->back()->with('success', '削除しました');
    }
}
