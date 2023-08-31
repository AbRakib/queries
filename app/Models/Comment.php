<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected static function booted() {
        static::addGlobalScope('rating', function (Builder $builder) {
            $builder->where('rating', '>', 2);
        }); 
    }
}
