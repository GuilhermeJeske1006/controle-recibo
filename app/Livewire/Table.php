<?php

namespace App\Livewire;

use App\Models\Receipt;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;

    public $search = '';

    #[Computed]
    public function receipts()
    {
        if (! empty($this->search)) {
            return $this->filter(); // Se houver uma pesquisa, aplique o filtro
        } else {
            return Receipt::where('company_id', user()->company_id)
                ->orderBy('created_at', 'desc')
                ->paginate(10);
        }
    }

    public function filter()
    {
        return Receipt::where('company_id', user()->company_id)
            ->where('payer', 'like', '%'.$this->search.'%')
            ->orWhere('cpf_payer', 'like', '%'.$this->search.'%')
            ->orWhere('value', 'like', '%'.$this->search.'%')
            ->orderBy('created_at', 'desc')
            ->paginate(10);
    }

    public function delete($id)
    {
        Receipt::find($id)->delete();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.table');
    }
}
