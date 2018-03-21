<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keterangan extends Model
{
    //
    protected $fillable = [
        'keadaan','thnklr','harga','desk','sepeda_id'];

    public function sepeda()
    {
	return $this->belongsTo('App\Sepeda');
	}
}
