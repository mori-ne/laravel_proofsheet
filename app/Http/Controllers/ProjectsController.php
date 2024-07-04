<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProjectRequest;
use Illuminate\Support\Str;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class ProjectsController extends Controller
{
    // 一覧表示
    public function index()
    {
        $posts = Projects::orderBy('id', 'desc')->get();
        return view('dashboard')->with('posts', $posts);
    }

    // 新規作成ページ
    public function create()
    {
        return view('dashboard.create');
    }

    // 新規作成
    public function store(StoreProjectRequest $request)
    {
        // バリデーション済みのデータを取得
        $validatedData = $request->validated();

        // UUIDを生成して追加
        $validatedData['unique_id'] = (string) Str::uuid();
        $validatedData['published_at'] = $request->published_at;
        $validatedData['unpublished_at'] = $request->unpublished_at;

        // プロジェクトを作成してデータベースに保存
        $project = Projects::create($validatedData);

        // 保存成功後のリダイレクトやレスポンス
        return redirect()->route('dashboard.index')->with('success', 'プロジェクトが正常に作成されました');
    }

    // 個別ページ
    public function show($id)
    {
        $post = Projects::with('form')->findOrFail($id);
        return view('dashboard.show', compact('post'));
    }

    // 編集ページ
    public function edit($id)
    {
        $data = Projects::find($id);
        // データが存在するかを確認
        if (!$data) {
            return redirect()->back()->withErrors(['error' => 'Data not found.']);
        }

        // データをビューに渡す
        return view('dashboard.edit', compact('data'));
    }

    // 更新処理
    public function update(Request $request, $id)
    {
        // バリデーション済みのデータを取得
        $request->validate([
            'project_name' => 'required|string|max:100',
            'description' => 'nullable|string',
            // 他のバリデーションルールをここに追加
        ]);

        $data = Projects::find($id);

        if (!$data) {
            return redirect()->back()->withErrors(['error' => 'Data not found.']);
        }

        // データを更新
        $data->project_name = $request->input('project_name');
        $data->description = $request->input('description');
        $data->published_at = $request->input('published_at');
        $data->unpublished_at = $request->input('unpublished_at');
        // 他のフィールドについても同様に設定

        // データを保存
        $data->save();

        // 成功した場合のリダイレクトやメッセージ表示などを行う
        return redirect()->route('dashboard.index')->with('success', 'Data updated successfully!');
    }

    // 削除処理
    public function destroy($id)
    {
        $project = Projects::find($id);

        // 削除するデータがなければ
        if (!$project) {
            return redirect()->back()->with('error', '削除するプロジェクトがありませんでした');
        }
        Projects::destroy($id);
        // return redirect()->back()->with('success', '削除しました');
        return redirect('dashboard')->with('success', '削除しました');
    }

    public function changeToggleStatus($id)
    {
        $project = Projects::find($id);
        if (!$project) {
            return redirect()->back()->with('error', '変更するプロジェクトがありませんでした');
        }
        // statusをトグル
        $project->status = !$project->status;
        $project->save();

        return redirect()->back()->with('success', '公開・非公開を変更しました');
    }
}
