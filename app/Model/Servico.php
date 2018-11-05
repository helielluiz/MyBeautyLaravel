<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    protected $fillable = ['Id_servico','Nm_servico'];
    public $timestamps = false; 
    protected $table = 'Servico';
}
