<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model {
    use HasFactory;

    public function imageable() {
        return $this->morphTo();
    }

    public function likes() {
        return $this->morphToMany( 'App\Models\User', 'likeable' );
    }
}
