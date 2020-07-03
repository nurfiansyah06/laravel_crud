<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    protected $table = "jawaban";

    protected $primaryKey = 'id';
    protected $fillable = [
        'isi','pertanyaan_id'
    ];

    protected $hidden = [];

    public function pertanyaan()
    {
        return $this->belongsTo('App\Pertanyaan', 'pertanyaan_id', 'id');
    }
}
