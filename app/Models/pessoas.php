<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pessoas extends Model
{
    protected $table = 'pessoas';
    public $timestamps = false;
    protected $fillable = ['nome', 'fone','email',];
}
