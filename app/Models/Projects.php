<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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
        return $this->hasMany(Forms::class);
    }

    // uuid
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->unique_id = (string) Str::uuid();
        });
    }
}
