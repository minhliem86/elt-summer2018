<?php
namespace App\Repositories;

use App\Repositories\Contract\RestfulInterface;
use App\Repositories\Eloquent\BaseRepository;
use App\Models\Event;

class EventRepository extends BaseRepository implements RestfulInterface{

    public function getModel()
    {
        return Event::class;
    }
    // END

}