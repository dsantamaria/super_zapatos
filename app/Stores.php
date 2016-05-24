<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stores extends Model
{
    protected $table = 'stores';

    public $timestamps = false;

    protected $fillable = ['name', 'address'];

    public function articles()
    {
        return $this->hasMany('App\Articles', 'store_id');
    }
}
