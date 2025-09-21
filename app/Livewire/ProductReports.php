<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Validate;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class ProductReports extends Component
{


    public function render()
    {
        return view('livewire.product-reports');
    }
}
