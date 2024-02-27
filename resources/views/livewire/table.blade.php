

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <livewire:components.table.thead >
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Pagador
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Valor
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Data
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Editar</span>
                    </th>
                </tr>
            </livewire:components.table.thead>

         
        <tbody>
            @foreach ($this->receipts as $item)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $item->payer }}
                </th>
                <td class="px-6 py-4">
                    R$ {{ $item->value }}
                </td>
                <td class="px-6 py-4">
                    {{ formatDate($item->date)}}
                </td>
                <td class="px-6 py-4 text-right">
                    <button  type="button"
                    wire:click="delete({{ $item->id }})"
                    wire:confirm="Você tem certeza que deseja excluir esse recibo?"
                     class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Excluir</button> /
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Ver</a>

                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
<div class="p-5">
    {{ $this->receipts->links()}}

</div>
</div>

