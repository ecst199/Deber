<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class states extends Model 
{   

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description', 
    ];
    public function board()
    {
        return $this->belongsTo('App\board');
    }
}
