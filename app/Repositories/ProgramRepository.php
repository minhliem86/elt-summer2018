<?php
namespace App\Repositories;

use App\Repositories\Contract\RestfulInterface;
use App\Repositories\Eloquent\BaseRepository;
use App\Models\Program;

class ProgramRepository extends BaseRepository implements RestfulInterface{

    public function getModel()
    {
        return Program::class;
    }
    // END

}