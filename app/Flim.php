<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flim extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'realease_date', 'rating', 'ticket_price', 'country', 'genre', 'photo'
    ];

    /**
     * The has Many Relationship
     *
     * @var array
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
