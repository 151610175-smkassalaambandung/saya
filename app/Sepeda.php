<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sepeda extends Model
{
    //
    protected $table = 'sepedas';
	protected $fillable = [
        'nama','mereks_id','tipes_id','foto'];

    public function mereks()
    {
    	return $this->belongsTo('App\Merek');
    }

    public function tipes()
    {
    	return $this->belongsTo('App\Tipe');
    }
}
