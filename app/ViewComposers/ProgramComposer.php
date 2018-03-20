<?php
namespace App\ViewComposers;

use Illuminate\View\View;
use App\Repositories\ProgramRepository;

class ProgramComposer{

    protected $program;

    public function __construct(ProgramRepository $program)
    {
        $this->program = $program;
    }

    public function compose(View $view)
    {
        // TODO: Bind data to view
        $program_list = $this->program->query(['id','name','slug','description','img_url','subtitle','status', 'order'])->where('status',1)->get();
        $view->with(['program' =>$program_list]);
    }
}