<?php

namespace App\Livewire;

use App\Models\message;
use Livewire\Component;

class Learn extends Component
{
    public $cname;
    public $caddress;
    public $ctel;
    public $msg;
    public function render()
    {
        return view('livewire.learn');
    }
    function addmsg()  {
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
            session()->flash("success","message sent now");
            return $this->redirect(route("home"),navigate:true);
    }
}
