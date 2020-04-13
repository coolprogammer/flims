<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'comment', 'user_id', 'flim_id'
    ];

    /**
     * The belongs to Relationship
     *
     * @var array
     */
    public function flims()
    {
        return $this->belongsTo(Flim::class);
    }

}
