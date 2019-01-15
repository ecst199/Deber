<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class images extends Model 
{   

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fileName', 'fileType', 'attach',
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
