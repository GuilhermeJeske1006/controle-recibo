<?php

namespace App\Livewire\Components\Receipt;

use App\Models\Receipt;
use Livewire\Component;

class Sheet extends Component
{
    public $receipt;

    public $bankTransfers;

    public function render()
    {
        return view('livewire.components.receipt.sheet');
    }

    public function mount()
    {
        $this->receipt =
            Receipt::where('user_id', auth()->id())
                ->with(['bankTransfers', 'checks', 'pixs'])
                ->latest()
                ->first();
    }
}
