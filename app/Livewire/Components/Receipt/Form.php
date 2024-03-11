<?php

namespace App\Livewire\Components\Receipt;

use App\Models\{BankTransfer, Check, Pix, Receipt};
use Livewire\Attributes\Validate;
use Livewire\Component;

class Form extends Component
{
    public bool $money = false;

    public bool $card = false;

    public bool $transfer = false;

    public bool $pix = false;

    public bool $check = false;

    public $pixReceiver = '';

    public $pixBank = '';

    public $pixKey = '';

    public $checkN_check = '';

    public $checkBank = '';

    public $checkAgency = '';

    public $checkDate_check = '';

    public $transferBank = '';

    public $transferAgency = '';

    public $transferAccount = '';

    public $transferReceiver = '';

    public $transferCpf_receiver = '';

    public $transferDate_transfer = '';

    #[Validate('required')]
    public string $payer = '';

    #[Validate('required')]
    public string $cpf_payer = '';

    #[Validate('required')]
    public string $referent = '';

    #[Validate('required')]
    public string $city = '';

    #[Validate('required')]
    public string $date = '';

    #[Validate('required')]
    public string $sender = '';

    #[Validate('required')]
    public string $cpf_sender = '';

    public string $phone_sender = '';

    #[Validate('required')]
    public string $type_payment = '';

    #[Validate('required')]
    public float $value;

    public function render()
    {
        return view('livewire.components.receipt.form');
    }

    public function updatedCpfPayer($cpf)
    {
        $this->cpf_payer = formatCpfCnpj($cpf);
    }

    public function setPix()
    {
        $this->pix      = true;
        $this->money    = false;
        $this->card     = false;
        $this->transfer = false;
        $this->check    = false;

    }

    public function setTransfer()
    {
        $this->transfer = true;
        $this->card     = false;
        $this->money    = false;
        $this->pix      = false;
        $this->check    = false;

    }

    public function setCard()
    {
        $this->card     = true;
        $this->money    = false;
        $this->transfer = false;
        $this->pix      = false;
        $this->check    = false;

    }

    public function setMoney()
    {
        $this->money    = true;
        $this->card     = false;
        $this->transfer = false;
        $this->pix      = false;
        $this->check    = false;

    }

    public function setCheck()
    {
        $this->check    = true;
        $this->money    = false;
        $this->card     = false;
        $this->transfer = false;
        $this->pix      = false;
    }

    public function typePayment()
    {
        if ($this->money) {
            return 0;
        }

        if ($this->card) {
            return 1;
        }

        if ($this->transfer) {
            return 2;
        }

        if ($this->pix) {
            return 3;
        }

        if ($this->check) {
            return 4;
        }
    }

    public function save()
    {
        try {
            $receipt = Receipt::create([
                'payer'        => $this->payer,
                'cpf_payer'    => $this->cpf_payer,
                'referent'     => $this->referent,
                'city'         => $this->city,
                'date'         => $this->date,
                'sender'       => $this->sender,
                'cpf_sender'   => $this->cpf_sender,
                'phone_sender' => $this->phone_sender,
                'type_payment' => $this->typePayment(),
                'value'        => $this->value,
                'user_id'      => auth()->id(),
                'company_id'   => user()->company_id,
            ]);

            if ($this->pix) {
                Pix::create([
                    'receiver'   => $this->pixReceiver,
                    'bank'       => $this->pixBank,
                    'key'        => $this->pixKey,
                    'receipt_id' => $receipt->id,
                ]);
            }

            if ($this->check) {
                Check::create([
                    'n_check'    => $this->checkN_check,
                    'bank'       => $this->checkBank,
                    'agency'     => $this->checkAgency,
                    'date_check' => $this->checkDate_check,
                    'receipt_id' => $receipt->id,
                ]);
            }

            if ($this->transfer) {
                BankTransfer::create([
                    'bank'          => $this->transferBank,
                    'agency'        => $this->transferAgency,
                    'account'       => $this->transferAccount,
                    'receiver'      => $this->transferReceiver,
                    'cpf_receiver'  => $this->transferCpf_receiver,
                    'date_transfer' => $this->transferDate_transfer,
                    'receipt_id'    => $receipt->id,
                ]);
            }
            flash()->addSuccess('Recibo criado com sucesso!');

            return redirect()->route('receipt.checkout');

        } catch (\Exception $e) {
            flash()->addError($e->getMessage());
        }
    }
}
