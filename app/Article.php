<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    //use SoftDeletes;
    //protected $fillable = ['autor','title', 'body'];
    protected $table = "articles";
}
