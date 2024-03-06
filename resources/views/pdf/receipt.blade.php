<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recibo de pagamento</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
    <div>

        <div  class="p-6 sheet bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <img src="{{ $receipt->company->photo }}"  style="max-width: 5%"  alt="">
            <a href="#">
                <h5 class="mb-6 text-2xl font-bold text-center tracking-tight text-gray-900 dark:text-white">Recibo de
                    Pagamento
                </h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Recebi(emos) de <b>{{ $receipt->payer }} </b> -
                CPF/CNPJ
                nº <b>{{ formatCpfCnpj($receipt->cpf_payer) }}</b>, a importância de <b>R$
                    {{ formatValue($receipt->value) }} ({{ formatExtension($receipt->value) }})
                </b> referente à <b>{{ $receipt->referent }} </b>.
    
                Para maior clareza firmo(amos) o presente recibo para que produza os seus efeitos, dando plena, rasa e
                irrevogável quitação, pelo valor recebido. <br>
                Pagamento efetuado através de
    
                @if ($receipt->type_payment == 0)
                    <b>Dinheiro</b>
                @endif
                @if ($receipt->type_payment == 1)
                    <b>Cartão de Crédito/Débito</b>
                @endif
                @if ($receipt->type_payment == 2)
                    <b>depósito/Transferência bancário </b> realizado em <b>
                        {{ formatDate($receipt->bankTransfers[0]['date_transfer']) }}
                    </b>, na conta: <b>{{ $receipt->bankTransfers[0]['account'] }} </b>, agência:
                    <b>{{ $receipt->bankTransfers[0]['agency'] }} </b>, banco : <b>{{ $receipt->bankTransfers[0]['bank'] }}
                    </b>.
                    Favorecido: <b>{{ $receipt->bankTransfers[0]['receiver'] }} </b>
                @endif
                @if ($receipt->type_payment == 3)
                    <b>Pix</b> <br>
                    Pagamento recebido por: <b>{{ $receipt->pixs[0]['receiver'] }} </b> - chave pix:
                    <b>{{ $receipt->pixs[0]['key'] }} - {{ $receipt->pixs[0]['bank'] }}</b>
                @endif
                @if ($receipt->type_payment == 4)
                    <b>cheque</b> n°: <b>{{ $receipt->checks[0]['n_check'] }}</b> do Banco:
                    <b>{{ $receipt->checks[0]['bank'] }}</b>, Agência: <b>{{ $receipt->checks[0]['agency'] }}</b>. <br>
    
                    Para todos os fins de direito, a validade do presente Recibo fica condicionada ao recebimento do cheque
                    acima identificado. <br>
    
                    Cheque bom para: <b>{{ formatDate($receipt->checks[0]['date_check']) }}</b>
                @endif
    
                .
            </p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 px-3 py-2  text-end  ">
                {{ $receipt->city }}, {{ formatDateString($receipt->date) }}
            </p>
    
            <div style="border-top: 1px solid black; width: 30%" class="text-center m-auto"></div>
    
            <p class="font-normal text-gray-700 dark:text-gray-400  py-1  text-center  ">
                {{ $receipt->sender }}
            </p>
            <p class="font-normal text-gray-700 dark:text-gray-400  py-1  text-center  ">
                {{ formatCpfCnpj($receipt->cpf_sender) }}
            </p>
            @if ($receipt->phone_sender)
                <p class="font-normal text-gray-700 dark:text-gray-400  py-1  text-center  ">
                    {{ formatPhone($receipt->phone_sender) }}
                </p>
            @endif
    
        </div>
    
    
    
    
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</body>
</html>





