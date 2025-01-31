<?php

namespace App\Livewire\Cells;
use Livewire\WithPagination;
use App\Models\Cell;
use Illuminate\Support\Facades\Log;

use Livewire\Component;

class ShowCells extends Component
{
    use WithPagination;

    public $search="";
    public function mount() {

    }
    public function render()
    {
        $cells=Cell::join('users', 'leader_id', '=', 'users.id')
                    //->join('countries','country_id','=','countries.id')
                    //->join('states','state_id','=','states.id')
                    ->select("cells.*","users.name as leader_name") //el alias "leader_name" es solo para evitar la ambiguedad ¿por qué necesito hacer cells.*?? no lo sé, pero funciona x.x
                    ->where("cells.name","like","%".$this->search."%")
                    ->orWhere("users.name","like","%".$this->search."%");
        Log::channel("test")->info("linea1");
        //Log::channel("test")->info($cells);
        return view('livewire.cells.show-cells',[
            'cells'=>$cells->paginate(10),
        ]);
    }

    public function edit($id) {
    }

    public function create() {
        return redirect('/cells/create');
    }
}
