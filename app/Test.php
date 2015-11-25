<?php

namespace App\Http\Models;

use Jenssegers\Mongodb\Model as Eloquent;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $collection = 'test';
}
