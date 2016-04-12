<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $fillable = array('name','phone','email');
    protected $table = 'contacts';
    public $timestamps = true;

    public function note() {
        return $this->hasMany('Note');
    }
}
