<?php

namespace App\Livewire\Components\Company;

use App\Models\{Adress, Company, User};
use Illuminate\Support\Facades\{Hash, Http};
use Livewire\Attributes\Validate;
use Livewire\{Component, WithFileUploads};

class Form extends Component
{
    use WithFileUploads;

    #[Validate('required')]
    public $name_company = '';

    #[Validate('required', 'min:14', 'max:14')]
    public $cnpj;

    #[Validate('email')]
    public $email;

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

    public $instagram;

    public $slogan;

    #[Validate('image|max:1024', 'mimes:jpg,jpeg,png')]
    public $marca_dagua;

    public function updatedCep()
    {
        $response = Http::get("https://viacep.com.br/ws/{$this->cep}/json/");
        $data     = $response->json();

        $this->street       = $data['logradouro'] ?? '';
        $this->neighborhood = $data['bairro'] ?? '';
        $this->city         = $data['localidade'] ?? '';
        $this->state        = $data['uf'] ?? '';
        $this->complement   = $data['complemento'] ?? '';
    }

    public function submit()
    {
        $this->validate();

        $this->photo       = $this->photo->store('photos', 's3');
        $this->marca_dagua = $this->marca_dagua->store('marca_dagua', 's3');

        try {
            $adress = Adress::create([
                'street'       => $this->street,
                'number'       => $this->number,
                'complement'   => $this->complement,
                'cep'          => $this->cep,
                'neighborhood' => $this->neighborhood,
                'city'         => $this->city,
                'state'        => $this->state,
            ]);

            $company = Company::create([
                'name_company' => $this->name_company,
                'cnpj'         => $this->cnpj,
                'email'        => $this->email,
                'phone'        => $this->phone_sender,
                'description'  => $this->description,
                'photo'        => $this->photo,
                'adress_id'    => $adress->id,
                'instagram'    => $this->instagram,
                'slogan'       => $this->slogan,
                'marca_dagua'  => $this->marca_dagua,

            ]);

            User::create([
                'name'       => 'admin' . str_replace(' ', '', $this->name_company),
                'email'      => 'admin' . str_replace(' ', '', $this->name_company) . '@gmail.com',
                'password'   => Hash::make('password'),
                'company_id' => $company->id,
                'is_master'  => false,
                'is_admin'   => true,
            ]);

            flash()->addSuccess('Empresa cadastrada com sucesso');

        } catch (\Exception $e) {
            flash()->addError($e->getMessage());
        }

    }

    public function render()
    {
        return view('livewire.components.company.form');
    }
}
