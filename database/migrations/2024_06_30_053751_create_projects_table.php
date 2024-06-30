<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary()->autoIncrement();
            $table->string('project_name', 100)->comment('プロジェクト名');
            $table->text('description')->nullable()->comment('説明');
            $table->boolean('status')->default(0)->comment('0:無効・1:有効');
            $table->timestamp('published_at')->nullable()->comment('公開開始期限');
            $table->timestamp('unpublished_at')->nullable()->comment('公開終了期限');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
