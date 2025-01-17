<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        $projects = [
            [
                'unique_id' => '00000000-0000-0000-0000-000000000001',
                'project_name' => '第69回 全国肢体不自由児療育研究大会',
                'description' => '■演題登録期間<br>～2024年7月31日（水）<br><br>※締め切り直前はホームページへのアクセスが集中しますので、 演題登録に時間がかかることが予想されます。時間に余裕をもってご登録をお願いします。<br>※登録された演題のご修正につきましても上記期間内に行うようお願い致します。<br>（演題募集締切後の、演題の登録・確認・修正・削除の操作は一切できません。）予めご了承ください。<br><br>■字数制限<br>文字数︓2000文字<br>※表・図・写真を扱う方は、1点につき400文字を減じてください。<br>（例えば、図と表で2点の場合、本文は1200文字以内）<br>文字数はテキスト枠左下のカウントで確認できます。<br><br>■図表のアップロードについて<br>・表・図・写真は、本文の最後に表1・図1として掲載します。<br>・JPG,PNG,PDFのファイルがアップロードできます。（マイページからプレビューできるのはJPGとPNGのみになります）<br>・ファイル容量について…1つ最大2MBまで。<br>※1演題につきアップロードできる点数は、2点までとなっております。<br>※PDFにつきましては複数ページに渡るもののアップロードはご遠慮ください。 1ページのみの状態にしてアップロードをお願いいたします',
                'status' => 0,
                'published_at' => $now,
                'unpublished_at' => $now,
            ],
            [
                'unique_id' => '00000000-0000-0000-0000-000000000002',
                'project_name' => '第31回 日本航空医療学会総会・学術集会',
                'description' => '演題をご登録ください。<br><br>※演題登録後に事前参加登録を必ず行ってください。<br><br>・演題名：最大で30文字<br>・抄録本文：最大で800文字<br>・登録可能な最大演者数（筆頭演者＋共同演者）：15名まで<br>・登録可能な最大所属機関数：10施設まで<br>・図表について：図表および写真は使用できません',
                'status' => 1,
                'published_at' => $now,
                'unpublished_at' => $now,
            ],
            [
                'unique_id' => '00000000-0000-0000-0000-000000000003',
                'project_name' => '九州ブロック介護老人保健施設大会 美ら沖縄',
                'description' => 'この度は第22回九州ブロック介護老人保健施設大会 美ら沖縄に演題をご登録頂きありがとうございます。<br>投稿内容のご確認は下記の手順でご確認頂けます。<br><br><br>■投稿内容のご確認について<br>投稿された内容のご確認はProofSheetサイト内のプレビューにてご確認ください。',
                'status' => 0,
                'published_at' => $now,
                'unpublished_at' => $now,
            ],
            [
                'unique_id' => '00000000-0000-0000-0000-000000000004',
                'project_name' => 'サマーセミナー in OKINAWA',
                'description' => '中頭病院 サマーセミナー演題募集用',
                'status' => 1,
                'published_at' => $now,
                'unpublished_at' => $now,
            ],
            [
                'unique_id' => '00000000-0000-0000-0000-000000000005',
                'project_name' => '日本ジェネリック医薬品・バイオシミラー学会',
                'description' => '■投稿内容のご確認について 投稿された内容のご確認はマイページのプレビューにてご確認ください。 「ログイン」→「マイページ」→「投稿フォーム一覧」→「プレビュー」 マイページログインURL https://www.proofsheet.jp/YuAIZ58stlM6zsz%2BCjnDGg%3D%3DFKS/',
                'status' => 1,
                'published_at' => $now,
                'unpublished_at' => $now,
            ]
        ];

        DB::table('projects')->insert($projects);
    }
}
