<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model {
    use HasFactory;
    public function cities() {
        return $this->belongsToMany( City::class, 'room_city', 'room_id', 'city_id' )->withPivot( 'created_at', 'updated_at' );
    }

    public function comments() {
        return $this->morphMany( 'App\Models\Comment', 'commentable' );
    }

    public function likes() {
        return $this->morphToMany( 'App\Models\User', 'likeable' );
    }
}
