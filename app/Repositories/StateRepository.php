<?php
/**
 * Created by PhpStorm.
 * User: rana
 * Date: 10/22/18
 * Time: 3:20 PM
 */

namespace App\Repositories;


use App\Models\State;

class StateRepository extends BaseRepository
{
    protected $model;

    public function __construct(State $model)
    {
        $this->model = $model;
    }
}