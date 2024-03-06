<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orçamento</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
    <div>

        <div
            style=" 
            background-image: url({{ $budget->company->marca_dagua }});
            background-position: center;
            background-repeat: no-repeat;
    
        @endif 
            class=" p-20 sheet bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    
    
            <div class="grid grid-cols-2 md:grid-cols-3 gap-8  mb-16">
                <div>
                    <img class="h-auto  rounded-lg" style="max-width: 30%;"
                        src="{{ $budget->company->photo }}" alt="">
                </div>
                <div></div>
    
                <div class=" flex justify-end">
                    <img class="h-auto rounded-lg" style="max-width: 15%; height: 70%;"
                        src="assets/instagram.png" alt="">
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
      
            <div>
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
            
        </div>
    
    
    
    </div>
    
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</body>
</html>





