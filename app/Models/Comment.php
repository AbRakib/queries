<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model {
    use HasFactory;
    // protected static function booted() {
    //     static::addGlobalScope('rating', function (Builder $builder) {
    //         $builder->where('rating', '>', 2);
    //     });
    // }

    // // when start query before added value 10 with result value
    // public function getRatingAttribute($value) {
    //     return $value + 10;
    // }

    // // when start query after added value 1 with result value
    // public function setRatingAttribute( $value ) {
    //     $this->attributes['rating'] = $value + 1;
    // }

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function country() {
        return $this->hasOneThrough(Address::class, User::class, 'user_id', 'user_id', 'id')->select('country as name');
    }
}
