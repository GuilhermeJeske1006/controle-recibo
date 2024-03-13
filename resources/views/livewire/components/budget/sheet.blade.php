<div>

    <div style="
    background-image: url({{ $budget->company->marca_dagua }});
    background-position: center;
    background-repeat: no-repeat;
"
        class=" p-20 sheet bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

        <div class="grid grid-cols-2 md:grid-cols-3 gap-8  mb-16">
            <div>
                <img class="h-auto  rounded-lg" style="max-width: 30%;"
                    src="{{ $budget->company->photo }}" alt="">
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
