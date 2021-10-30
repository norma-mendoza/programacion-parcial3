<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = ['nombreCurso','year','ciclo','user_id'];

    //Relaciones
    public function user(){
        return $this->belongsTo(User::class);
    }
}
