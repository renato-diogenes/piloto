<?php

namespace App\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Collection;

abstract class AbstractRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = $this->resolveModel();
    }

    public function all(): Collection
    {
        $model = $this->model;
        return $model->all();
    }

    protected function resolveModel()
    {
        return app($this->model);
    }
}