<?php

namespace App\Livewire;

use App\Models\message;
use Livewire\Component;

class Services extends Component
{
    
    public function render()
    {
        $sel=message::all();
        return view('livewire.services',["data"=>$sel]);
    }
    function delete($id)  {
        message::find($id)->delete();
    }
}
