<?php

namespace App\Livewire;

use App\Models\Content;
use Livewire\Component;

class ShowEditext extends Component
{

    
    public function render()
    {
        return view('livewire.show-editext', [
            'contents'=> Content::paginate(5)
        ]);
    }
}
