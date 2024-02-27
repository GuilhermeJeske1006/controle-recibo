<?php

namespace App\Livewire;

use App\Models\Receipt;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;

    #[Computed]
    public function receipts()
    {
        return Receipt::where('user_id', auth()->id())
            // ->where('name', 'like', '%' . $this->search . '%')
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
