<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    protected $table = 'parents';

    protected $fillable = [
        'nama_ayah', 
        'nik_ayah', 
        'nama_ibu', 
        'nik_ibu', 
        'no_hp_orangtua', 
        'email_orangtua'
    ];

    public function forms()
    {
        return $this->belongsTo(Form::class);
    }
}
