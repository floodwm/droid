<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model

{
    protected $fillable = ['title', 'slug', 'cretaed_by', 'modified_by', 'parent_id', 'published'];

    public function setSlugAttribute($value){
        $this->attributes['slug'] = Str::slug($this->title, "-");
    }

    public function getParentCategory(){
        return $this->hasMany('App\Category','parent_id');
    }
}
