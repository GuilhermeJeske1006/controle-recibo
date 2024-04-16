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
        try {
            if ($this->item) {
                $this->budget = $this->item;
            } else {
                $this->budget = Budget::where('company_id', user()->company_id)
                    ->with(['company'])
                    ->latest()
                    ->first();

                if($this->budget->company->photo) {
                    $this->budget->company->photo = Storage::url($this->budget->company->photo);
                }

                if($this->budget->company->marca_dagua) {
                    $this->budget->company->marca_dagua = Storage::url($this->budget->company->marca_dagua);
                }

            }
        } catch (\Throwable $th) {
            flash()->addError('Erro ao carregar orçamento!');
        }

    }

    public function render()
    {
        return view('livewire.components.budget.sheet');
    }
}
