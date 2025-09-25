<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Witness extends Model
{
    protected $table = 'witnesses';

    protected $fillable = [
        'nama',
        'nik_saksi'
    ];

    public function forms()
    {
        return $this->belongsTo(Form::class);
    }
}
