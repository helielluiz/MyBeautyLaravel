<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $fillable = ['Id_estado','Nm_uf','Nm_estado'];
    public $timestamps = false; 
    protected $table = 'Estado';
}
