<?php

namespace App\Livewire\Components\Receipt;

use App\Models\Receipt;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Sheet extends Component
{
    public $receipt;

    public Receipt $data;

    public $item;

    public function render()
    {
        return view('livewire.components.receipt.sheet');
    }

    public function mount()
    {
        if ($this->item) {
            $this->receipt = $this->item;

        } else {
            $this->receipt =
            Receipt::where('user_id', auth()->id())
                ->with(['bankTransfers', 'checks', 'pixs', 'company'])
                ->latest()
                ->first();

            $this->receipt->company->photo = Storage::url($this->receipt->company->photo);

        }
    }
}
