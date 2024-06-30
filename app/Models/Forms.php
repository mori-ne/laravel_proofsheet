<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forms extends Model
{
    use HasFactory;

    protected $table = 'forms';

    protected $fillable = [
        'project_id',
        'form_name',
        'description',
    ];

    public function project()
    {
        return $this->belongsTo(Projects::class);
    }
}
