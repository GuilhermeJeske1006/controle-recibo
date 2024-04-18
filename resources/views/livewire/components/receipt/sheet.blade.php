<div>

    <div class="p-6 sheet bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <img src="{{ $receipt->company->photo }}" class="img-photo" alt="">
        <a href="#">
            <h5 class="mb-6 text-2xl font-bold text-center tracking-tight text-gray-900 dark:text-white">Recibo de
                Pagamento
            </h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Recebi(emos) de <b>{{ $receipt->payer }} </b> -
            CPF/CNPJ
            nº <b>{{ formatCpfCnpj($receipt->cpf_payer) }} </b> , a importância de <b>R$
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

        <p class="font-normal text-gray-700 dark:text-gray-400  pt-1  text-center  ">
            {{ $receipt->sender }}
        </p>
        <p class="font-normal text-gray-700 dark:text-gray-400  text-center  ">
            {{ formatCpfCnpj($receipt->cpf_sender) }}
        </p>
        @if ($receipt->phone_sender)
            <p class="font-normal text-gray-700 dark:text-gray-400  text-center  ">
                {{ formatPhone($receipt->phone_sender) }}
            </p>
        @endif

    </div>

    <a href="{{ route('receipt.download', ['receipt' => $receipt]) }}" target="_blank"
        class="m-3 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Imprimir
        <svg class="rtl:rotate-180 w-4 h-5.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linejoin="round" stroke-width="2"
                d="M16.4 18H19c.6 0 1-.4 1-1v-5c0-.6-.4-1-1-1H5a1 1 0 0 0-1 1v5c0 .6.4 1 1 1h2.6m9.4-7V5c0-.6-.4-1-1-1H8a1 1 0 0 0-1 1v6h10ZM7 15h10v4c0 .6-.4 1-1 1H8a1 1 0 0 1-1-1v-4Z" />
        </svg>

    </a>
    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
        class="m-3 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        type="button">
        Enviar para
        <svg class="rtl:rotate-180 w-4 h-5.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m16 10 3-3m0 0-3-3m3 3H5v3m3 4-3 3m0 0 3 3m-3-3h14v-3" />
        </svg>
    </button>

    <div id="crud-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Enviar Recibo para o email
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="crud-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form action="{{ route('receipt.send', ['receipt' => $receipt->id]) }}" class="p-4 md:p-5">
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="email" name="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Informe o email do cliente" required="">
                        </div>
                    </div>
                    <button type="submit"
                        class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Enviar
                    </button>
                </form>
            </div>
        </div>
    </div>


</div>
