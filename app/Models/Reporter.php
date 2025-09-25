<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reporter extends Model
{
    protected $table = 'reporters';

    protected $fillable = [
        'user_id', 
        'nama', 
        'nik_saksi'
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
    
    public function forms()
    {
        return $this->belongsTo(Form::class);
    }
}