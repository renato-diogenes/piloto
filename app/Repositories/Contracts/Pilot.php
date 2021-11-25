<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Collection;

interface Pilot
{
    public function all(): Collection;
}