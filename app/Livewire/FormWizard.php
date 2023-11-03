<?php

namespace App\Livewire;

use Livewire\Attributes\Rule;
use Livewire\Component;

class FormWizard extends Component
{
    public $step = 1;
    public $data = [
        1 => ['campo1' => ''],
        2 => ['campo2' => ''],
        3 => ['campo3' => ''],
        4 => ['campo4' => ''],
        5 => ['campo5' => ''],
        6 => ['campo6' => ''],
        7 => ['campo7' => ''],
        8 => ['campo8' => ''],
        9 => ['campo9' => ''],
        10 => ['campo10' => ''],
        11 => ['campo11' => ''],
        12 => ['campo12' => ''],
        13 => ['campo13' => ''],
        14 => ['campo14' => ''],
        15 => ['campo15' => ''],
        16 => ['content' => ''],
    ];

    public $content;



    public $success = false;

    public function render()
    {
        return view('livewire.form-wizard');
    }

    public function nextStep()
    {
        $step = $this->step;

        if ($step === 1) {
            $this->validate([
                'data.1.campo1' => 'required',
                'data.2.campo2' => 'required',
                'data.3.campo3' => 'required',
                'data.4.campo4' => 'required',
                'data.5.campo5' => 'required',
                'content'=>'required'

            ], [
                'data.1.campo1' => 'El campo 1 es requerido',
                'data.2.campo2' => 'El campo 2 es requerido',
                'data.3.campo3' => 'El campo 3 es requerido',
                'data.4.campo4' => 'El campo 4 es requerido',
                'data.5.campo5' => 'El campo 5 es requerido',
                'content'=> 'el contenido es requerido'
            ]);


           
        } elseif ($step === 2) {
            $this->validate([
                'data.6.campo6' => 'required',
                'data.7.campo7' => 'required',
                'data.8.campo8' => 'required',
                'data.9.campo9' => 'required',
                'data.10.campo10' => 'required',

            ],[
                'data.6.campo6' => 'El campo 6 es requerido',
                'data.7.campo7' => 'El campo 7 es requerido',
                'data.8.campo8' => 'El campo 8 es requerido',
                'data.9.campo9' => 'El campo 9 es requerido',
                'data.10.campo10' => 'El campo 10 es requerido'
            ]);


        } elseif ($step === 3) {
            $this->validate([
                'data.11.campo11' => 'required',
                'data.12.campo12' => 'required',
                'data.13.campo13' => 'required',
                'data.14.campo14' => 'required',
                'data.15.campo15' => 'required',
            ]);
        }

        if ($this->step < 3) {
            $this->step++;
        }
    }

    public function previousStep()
    {
        if ($this->step > 1) {
            $this->step--;
        }
    }

    public function save()
    {
        $this->validate([
            'data.1.campo1' => 'required',
            'data.2.campo2' => 'required',
            'data.3.campo3' => 'required',
            'data.4.campo4' => 'required',
            'data.5.campo5' => 'required',
            'data.6.campo6' => 'required',
            'data.7.campo7' => 'required',
            'data.8.campo8' => 'required',
            'data.9.campo9' => 'required',
            'data.10.campo10' => 'required',
            'data.11.campo11' => 'required',
            'data.12.campo12' => 'required',
            'data.13.campo13' => 'required',
            'data.14.campo14' => 'required',
            'data.15.campo15' => 'required',
        ],[
            'data.11.campo11' => 'El campo 11 es requerido',
            'data.12.campo12' => 'El campo 12 es requerido',
            'data.13.campo13' => 'El campo 13 es requerido',
            'data.14.campo14' => 'El campo 14 es requerido',
            'data.15.campo15' => 'El campo 15 es requerido'
        ]);
        $this->success = true;
    }
}

