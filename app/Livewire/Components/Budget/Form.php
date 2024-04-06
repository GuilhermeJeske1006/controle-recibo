<?php

namespace App\Livewire\Components\Budget;

use App\Models\Budget;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Form extends Component
{
    #[Validate('required')]
    public $client;

    public $cnpj_budget;

    #[Validate('required')]
    public $value_budget;

    public $date_budget;

    #[Validate('required')]
    public $email_client;

    public $phone_client;

    public $description;

    public $reference;

    public $budgets;

    public function submit()
    {
        try {
            $this->validate();

            Budget::create([
                'client'       => $this->client,
                'cnpj_budget'  => $this->cnpj_budget,
                'value_budget' => $this->value_budget,
                'date_budget'  => $this->date_budget,
                'email_client' => $this->email_client,
                'phone_client' => $this->phone_client,
                'description'  => $this->description,
                'company_id'   => user()->company_id,
                'reference'    => $this->reference,
            ]);

            flash()->addSuccess('Orçamento cadastrado com sucesso!');

            return redirect()->route('budget.checkout');

        } catch (\Throwable $th) {
            dd($th->getMessage());
            flash()->addError('Erro ao cadastrar orçamento!');
        }

    }

    public function mount()
    {
        $this->budgets = Budget::where('company_id', user()->company_id)
            ->orderBy('id', 'desc')
            ->limit(3)
            ->get();
    }

    public function receive($budget)
    {
        $this->client       = $budget['client'];
        $this->cnpj_budget  = $budget['cnpj_budget'];
        $this->value_budget = $budget['value_budget'];
        $this->date_budget  = $budget['date_budget'];
        $this->email_client = $budget['email_client'];
        $this->phone_client = $budget['phone_client'];
        $this->description  = $budget['description'];
        $this->reference    = $budget['reference'];
    }

    public function render()
    {
        return view('livewire.components.budget.form');
    }
}
