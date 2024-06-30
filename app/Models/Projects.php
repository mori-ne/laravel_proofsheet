<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $fillable = [
        'unique_id',
        'project_name',
        'description',
        'status',
        'published_at',
        'unpublished_at',
    ];

    // リレーション
    public function form()
    {
        return $this->hasMany(Forms::class, 'project_id');
    }
}
