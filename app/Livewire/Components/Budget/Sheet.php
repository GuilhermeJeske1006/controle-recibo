<?php

namespace App\Livewire\Components\Budget;

use App\Models\Budget;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Sheet extends Component
{
    public $budget;

    public $item;

    public function mount()
    {
        if ($this->item) {
            $this->budget = $this->item;
        } else {
            $this->budget = Budget::where('company_id', user()->company_id)
                ->with(['company'])
                ->latest()
                ->first();

            $this->budget->company->photo = Storage::url($this->budget->company->photo);
            $this->budget->company->marca_dagua = Storage::url($this->budget->company->marca_dagua);

        }
    }

    public function render()
    {
        return view('livewire.components.budget.sheet');
    }
}
