<?php
namespace App\Repositories;

use App\Repositories\Contract\RestfulInterface;
use App\Repositories\Eloquent\BaseRepository;
use App\Models\Register;

class RegisterRepository extends BaseRepository implements RestfulInterface{

    public function getModel()
    {
        return Register::class;
    }
    // END

}