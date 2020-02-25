<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class referer extends Model
{
    protected $table = 'referer';

    protected $fillable = ['link','jumlah'];
}
