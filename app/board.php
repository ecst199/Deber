<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class board extends Model 
{   

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'beginPosition', 'beginTime', 'endTime', 'row', 'column',
    ];
    public function histories()
    {
        return $this->belongsTo('App\histories');
    }
    public function states()
    {
        return $this->hasMany('App\states');
    }
}
