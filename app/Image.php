<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';
    protected $guarded = [];

    public function blog() {
      return $this->belongsTo(Blog::class);
    }
}
