<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';

    public function image() {
      return $this->hasOne(Image::class);
    }
}
