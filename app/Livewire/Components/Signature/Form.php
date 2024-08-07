<?php

namespace App\Livewire\Components\Signature;

use App\Models\{Adress, Company, User};
use Illuminate\Support\Facades\{DB, Hash, Http};
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

    public $marca_dagua;

    #[Validate('required')]
    public $name_user;

    #[Validate('email', 'required', 'unique:users,email', 'max:255')]
    public $email_user;

    #[Validate('required', 'min:8', 'max:255', 'same:password_confirmation')]
    public $password;

    public $confirm_password;

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

        if($this->photo != null) {
            $this->photo = $this->photo->store('photos', 's3');
        }

        if($this->marca_dagua != null) {
            $this->marca_dagua = $this->marca_dagua->store('marca_dagua', 's3');
        }

        try {
            DB::beginTransaction();

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

            $user = User::create([
                'name'       => $this->name_user,
                'email'      => $this->email_user,
                'password'   => Hash::make($this->password),
                'company_id' => $company->id,
                'is_master'  => false,
                'is_admin'   => true,
            ]);

            DB::commit();
            $this->resetForm();

            flash()->addSuccess('Empresa cadastrada com sucesso');

            if($user) {
                return redirect()->route('subscribe', ['user' => $user->id]);
            }

            return redirect()->route('signature.register');

        } catch (\Exception $e) {
            DB::rollBack();
            flash()->addError('Erro ao cadastrar empresa');
        }

    }

    public function resetForm()
    {
        $this->name_company     = '';
        $this->cnpj             = '';
        $this->email            = '';
        $this->phone_sender     = '';
        $this->description      = '';
        $this->photo            = '';
        $this->street           = '';
        $this->number           = '';
        $this->complement       = '';
        $this->cep              = '';
        $this->neighborhood     = '';
        $this->city             = '';
        $this->state            = '';
        $this->instagram        = '';
        $this->slogan           = '';
        $this->marca_dagua      = '';
        $this->name_user        = '';
        $this->email_user       = '';
        $this->password         = '';
        $this->confirm_password = '';
    }

    public function render()
    {
        return view('livewire.components.signature.form');
    }
}
