<?php

namespace App\Livewire;

use App\Models\message;
use Livewire\Component;

class About extends Component
{
    public function render()
    {

        $sel=message::paginate(6);
        return view('livewire.about',["data"=>$sel]);
    }
    function heart($id)  {
        $tb=message::find($id);
        $rec=$tb->love=$tb->love+1;
        $tb->love=$rec;
        $tb->save();
    }
    function likes($id)  {
        $tb=message::find($id);
        $rec=$tb->likes=$tb->likes+1;
        $tb->likes=$rec;
        $tb->save();
    }
    function dislikes($id)  {
        $tb=message::find($id);
        $rec=$tb->dislikes=$tb->dislikes+1;
        $tb->dislikes=$rec;
        $tb->save();
    }
}
