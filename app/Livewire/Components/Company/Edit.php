<?php

namespace App\Livewire\Components\Company;

use App\Models\Company;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public $company;

    public $name_company = '';

    #[Validate('required', 'min:14', 'max:14')]
    public $cnpj;

    #[Validate('email')]
    public $email;

    #[Validate('required')]
    public $phone_sender;

    public $description;

    #[Validate('image|max:1024', 'mimes:jpg,jpeg,png', 'required')]
    public $photo;

    #[Validate('required')]
    public $street = '';

    public $number = '';

    public $complement = '';

    #[Validate('required')]
    public $cep = '';

    #[Validate('required')]
    public $neighborhood = '';

    #[Validate('required')]
    public $city = '';

    #[Validate('required')]
    public $state = '';

    public $instagram = '';

    public $slogan = '';

    #[Validate('image|max:1024', 'mimes:jpg,jpeg,png')]
    public $marca_dagua;

    public function mount()
    {
        $this->company = Company::find(user()->company_id);
        $this->name_company = $this->company->name_company;
        $this->instagram = $this->company->instagram;
        $this->slogan = $this->company->slogan;
        $this->marca_dagua = $this->company->marca_dagua;
        $this->cnpj = $this->company->cnpj;
        $this->email = $this->company->email;
        $this->phone_sender = $this->company->phone;
        $this->description = $this->company->description;
        $this->street = $this->company->adress->street;
        $this->number = $this->company->adress->number;
        $this->complement = $this->company->adress->complement;
        $this->cep = $this->company->adress->cep;
        $this->neighborhood = $this->company->adress->neighborhood;
        $this->city = $this->company->adress->city;
        $this->state = $this->company->adress->state;
    }

    public function edit()
    {
        if ($this->photo != null) {
            $this->photo = $this->photo->store('photos', 's3');
        } else {
            $this->photo = $this->company->photo;
        }

        if ($this->marca_dagua != null) {
            $this->marca_dagua = $this->marca_dagua->store('marca_dagua', 's3');
        } else {
            $this->marca_dagua = $this->company->marca_dagua;
        }

        try {

            $this->company->adress->update([
                'street' => $this->street,
                'number' => $this->number,
                'complement' => $this->complement,
                'cep' => $this->cep,
                'neighborhood' => $this->neighborhood,
                'city' => $this->city,
                'state' => $this->state,
            ]);

            $company = $this->company->update([
                'name_company' => $this->name_company,
                'cnpj' => $this->cnpj,
                'email' => $this->email,
                'phone' => $this->phone_sender,
                'description' => $this->description,
                'photo' => $this->photo,
                'instagram' => $this->instagram,
                'slogan' => $this->slogan,
                'marca_dagua' => $this->marca_dagua,
                'adress_id' => $this->company->adress_id,
            ]);

            flash()->addSuccess('Empresa editada com sucesso!');
        } catch (\Exception $e) {
            flash()->addError('Erro ao editar empresa!');
        }

    }

    public function render()
    {
        return view('livewire.components.company.edit');
    }
}
