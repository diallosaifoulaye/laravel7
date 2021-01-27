<?php
/**
 * Created by PhpStorm.
 * User: stagiaire_dev_mob
 * Date: 7/6/20
 * Time: 10:48 AM
 */

namespace App\Repositories;


class UserRepository extends ResourceRepository
{

    protected $user;

    public function __construct(User $user)
    {
        $this->model = $user;
    }

}