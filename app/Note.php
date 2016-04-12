<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    //
    protected $fillable = array('contact_id','note');
    protected $table = 'notes'p;
    public $timestamps = true;

    public function contact() {
        return $this->belongsTo('Contact');
    }
}
