<?php

namespace App\Livewire\Components\Budget;

use App\Models\Budget;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;

    public $search;

    #[Computed]
    public function budgets()
    {
        if (! empty($this->search)) {
            return $this->filter();
        } else {
            return Budget::where('company_id', user()->company_id)
                ->orderBy('created_at', 'desc')
                ->paginate(10);
        }
    }

    public function filter()
    {
        return Budget::where('company_id', user()->company_id)
            ->where('client', 'like', '%'.$this->search.'%')
            ->orWhere('cnpj_budget', 'like', '%'.$this->search.'%')
            ->orWhere('value_budget', 'like', '%'.$this->search.'%')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

    }

    public function delete($id)
    {
        Budget::find($id)->delete();
    }

    public function render()
    {
        return view('livewire.components.budget.table');
    }
}
