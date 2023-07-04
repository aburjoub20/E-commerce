<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
    use Spatie\Translatable\HasTranslations;

class BlogCategory extends Model
{

    use HasTranslations;
    protected $fillable=['name','email','phone','password'];

    public $translatable = ['name'];

    use HasFactory;
}
