<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    protected $table = 'children'; 

    protected $fillable = [
        'nama', 
        'jenis_kelamin', 
        'tempat_dilahirkan', 
        'tempat_kelahiran', 
        'hari_tanggal', 
        'pukul', 
        'kelahiran_ke', 
        'penolong_kelahiran', 
        'berat_bayi', 
        'panjang_bayi'
    ];

    public function forms()
    {
        return $this->belongsTo(Form::class);         
    }

}
