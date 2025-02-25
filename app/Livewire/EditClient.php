<?php

namespace App\Livewire;

use App\Models\message;
use Livewire\Component;

class EditClient extends Component
{
    public $id;
    public $cname;
    public $caddress;
    public $ctel;
    public $msg;
    public function render()
    {
        return view('livewire.edit-client');
    }
    function mount()  {
        $ab=message::findOrFail($this->id);
        $this->cname=$ab->client_name;
        $this->caddress=$ab->address;
        $this->ctel=$ab->client_tel;
        $this->msg=$ab->message;
    }
    function updt()  {
        $dt=$this->validate(
            [
                "cname"=>"required",
                "ctel"=>"required|max_digits:10",
                "caddress"=>"required",
                "msg"=>"required"
            ]
            );


            $ms=new message();
            $ms->client_name=$this->cname;
            $ms->client_tel=$this->ctel;
            $ms->address=$this->caddress;
            $ms->message=$this->msg;
            $ms->save($dt);
            $this->reset(["cname","ctel","caddress","msg"]);
            session()->flash("success","message updated now");
            return $this->redirect(route("services"),navigate:true);
    }
}
