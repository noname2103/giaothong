<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Ptraffic extends Eloquent
{
    //
    protected $connection = 'mongodb';
    protected $collection = 'Ptraffic';
    protected $primarykey = 'id';
}
