<?php

namespace App\Models;

use App\Models\Traits\TranslationslugTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
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
        'meta_description_ru',
        'meta_description_uz',
        'image_path',
        'image_name',
        'category_id',
    ];
    
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
