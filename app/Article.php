<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{

    protected $fillable = ['title', 'slug', 'description_short', 'description', 'published', 'created_by', 'updated_by',
      'image', 'image_show', 'meta_title', 'meta_description', 'meta_keywords'];

    public function setSlugAttribute($value) {
      $this->attributes["slug"] = Str::slug(mb_substr($this->title, 0, 40) .
         "-" . \Carbon\Carbon::now()->format('dmyHi'), '-');
    }

    public function categories() {
      return $this->morphToMany('App\Category', 'categoryable');
    }
}
