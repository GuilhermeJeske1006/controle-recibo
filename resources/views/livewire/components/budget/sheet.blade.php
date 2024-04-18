<div>

    <div style="
    background-image: url({{ $budget->company->marca_dagua }});
    background-position: center;
    background-repeat: no-repeat;
"
        class=" sm-p-10 p-20 sheet bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

        <div class="grid grid-cols-2 md:grid-cols-3 gap-8  mb-16 hidden-mobile">
            <div>
                <img class="h-auto  rounded-lg" style="max-width: 30%;" src="{{ $budget->company->photo }}" alt="">
            </div>
            <div></div>

            <div class=" flex justify-end">
                <img class="h-auto rounded-lg" style="max-width: 15%; height: 70%;"
                    src="{{ asset('assets/instagram.png') }}" alt="">
                <p class="mb-3 flex items-center ml-3 font-bold text-gray-700 dark:text-gray-400">
                    {{ '@' }}{{ $budget->company->instagram }}

                </p>
            </div>

        </div>

        <a href="#">
            <h5 class="mb-6 text-2xl font-bold text-center tracking-tight text-gray-900 dark:text-white">ORÇAMENTO
            </h5>
            <h5 class="mb-6  text-center tracking-tight text-gray-900 dark:text-white">{{ $budget->company->name }}
                {{ $budget->company->slogan }}
            </h5>
        </a>
        <p class="mb-5  font-normal text-gray-700 dark:text-gray-400">
            1- CLIENTE: <b>{{ $budget->client }}</b>
        </p>
        <p class="mb-3  font-normal text-gray-700 dark:text-gray-400">
            2- DESCRIÇÃO DOS SERVIÇOS: <br>
            {!! $budget->description !!}
        </p> <br>

        <p class="mb-3  font-normal text-gray-700 dark:text-gray-400">
            Orçamento referente a <b>{{ $budget->reference }}</b> para a execução dos serviços descritos no item acima,
            no valor de
            <b>R$ {{ formatValue($budget->value_budget) }}</b> ({{ formatExtension($budget->value_budget) }}).
        </p>


        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 py-2  text-end  ">
            {{ $budget->company->adress->city }}, {{ formatDateString($budget->date_budget) }}
        </p>
        <br>
        <p class="mb-1 font-normal text-gray-700 dark:text-gray-400  text-end  ">
            {{ $budget->company->name_company }} - CNPJ {{ formatCpfCnpj($budget->company->cnpj) }}
        </p>
        <p class="mb-1 font-normal text-gray-700 dark:text-gray-400   text-end  ">
            Contato {{ formatPhone($budget->company->phone) }}
        </p>
        <p class="mb-1 font-normal text-gray-700 dark:text-gray-400  text-end  ">
            {{ $budget->company->email }}
        </p>
    </div>

    <a href="{{ route('budget.download', ['budget' => $budget->id]) }}" target="_blank"
        class="m-3 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Imprimir
        <svg class="rtl:rotate-180 w-4 h-5.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linejoin="round" stroke-width="2"
                d="M16.4 18H19c.6 0 1-.4 1-1v-5c0-.6-.4-1-1-1H5a1 1 0 0 0-1 1v5c0 .6.4 1 1 1h2.6m9.4-7V5c0-.6-.4-1-1-1H8a1 1 0 0 0-1 1v6h10ZM7 15h10v4c0 .6-.4 1-1 1H8a1 1 0 0 1-1-1v-4Z" />
        </svg>

    </a>


    <!-- Modal toggle -->
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

    <!-- Main modal -->
    <div id="crud-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Enviar Orçamento para o email
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
                <form action="{{ route('budget.send', ['budget' => $budget->id]) }}" class="p-4 md:p-5">
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


    <style>
        @media screen and (max-width: 768px) {
            .sm-p-10 {
                padding: 10px
            }

        }
    </style>
</div>
