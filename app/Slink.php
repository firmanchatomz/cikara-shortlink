<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slink extends Model
{
    protected $table = 'slink';

    protected $fillable = ['link_original','link_short','view'];
}
