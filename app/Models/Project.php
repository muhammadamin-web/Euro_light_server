<?php

namespace App\Models;
use App\Models\Traits\TranslationslugTrait;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory, TranslationslugTrait;

    protected $fillable = [
        'name_ru',
        'name_uz',
        'description_ru',
        'description_uz',
        'slug_uz',
        'slug_ru',
        'tags_uz',
        'tags_ru',
        'image_path',
        'image_name',
    ];
}
