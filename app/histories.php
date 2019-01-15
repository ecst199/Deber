<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class histories extends Model 
{   

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'plays', 'beginDate', 'endDate', 'moveNumber', 'turn'
    ];
    public function board()
    {
        return $this->hasMany('App\board');
    }
}
