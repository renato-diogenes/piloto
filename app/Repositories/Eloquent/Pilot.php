<?php

namespace App\Repositories\Eloquent;

use App\Models;
use App\Repositories\Contracts;

class Pilot extends AbstractRepository implements Contracts\Pilot
{
    protected $model = Models\Pilot::class;
}