<div>

    <div  class="p-6 sheet bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <img src="{{ $receipt->company->photo }}" class="img-photo"  alt="">
        <a href="#">
            <h5 class="mb-6 text-2xl font-bold text-center tracking-tight text-gray-900 dark:text-white">Recibo de
                Pagamento
            </h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Recebi(emos) de <b>{{ $receipt->payer }} </b> -
            CPF/CNPJ
            nº <b>{{ formatCpfCnpj($receipt->cpf_payer) }} </b> , a importância de <b>R$
                {{ formatValue($receipt->value) }}
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

    <a href="{{ route('receipt.download', ['receipt' => $receipt ]) }}" target="_blank"
        class="m-3 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Imprimir
        <svg class="rtl:rotate-180 w-4 h-5.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linejoin="round" stroke-width="2"
                d="M16.4 18H19c.6 0 1-.4 1-1v-5c0-.6-.4-1-1-1H5a1 1 0 0 0-1 1v5c0 .6.4 1 1 1h2.6m9.4-7V5c0-.6-.4-1-1-1H8a1 1 0 0 0-1 1v6h10ZM7 15h10v4c0 .6-.4 1-1 1H8a1 1 0 0 1-1-1v-4Z" />
        </svg>

    </a>

    <a href="https://api.whatsapp.com" target="_blank"
        class="m-3 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Enviar para
        <svg class="rtl:rotate-180 w-4 h-5.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m16 10 3-3m0 0-3-3m3 3H5v3m3 4-3 3m0 0 3 3m-3-3h14v-3" />
        </svg>
    </a>


</div>


