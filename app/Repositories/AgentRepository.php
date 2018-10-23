<?php
/**
 * Created by PhpStorm.
 * User: rana
 * Date: 10/22/18
 * Time: 3:20 PM
 */

namespace App\Repositories;


use App\Models\Agent;

class AgentRepository extends BaseRepository
{
    protected $model;

    public function __construct(Agent $model)
    {
        $this->model = $model;
    }
}