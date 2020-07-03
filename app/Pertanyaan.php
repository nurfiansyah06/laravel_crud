<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table = "pertanyaan";

    protected $primaryKey = 'id';
    protected $fillable = [
        'judul','isi'
    ];

    protected $hidden = [

    ];


    public function jawabans()
    {
        return $this->hasMany('App\Jawaban', 'pertanyaan_id', 'id');
    }
}
