
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <div class="p-6 text-gray-900 dark:text-gray-100">
        <form wire:submit="filter" class="hidden-mobile">
            <label for="default-search"
                class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Procurar</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
               

                <input wire:model="search" type="search" id="default-search"
                    class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Pesquise por Cliente, CNPJ, Valor..." />
                <button type="submit"
                    class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Pesquisar</button>
            </div>
        </form>

        <form wire:submit="filter" class="hidden-desktop">
            <label for="default-search"
                class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Procurar</label>
            <div class="relative">

                <input wire:model="search" type="search" id="default-search"
                    class="block w-full p-4  text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Pesquise pelo Cliente" />
                <button type="submit"
                    class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="w-4 h-4 text-gray-500 dark:text-white " aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
                </button>
            </div>
        </form>
    </div>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <livewire:components.table.thead>
            <tr>
                <th scope="col" class="px-6 py-3">
                    Pagador
                </th>
                <th scope="col" class="px-6 py-3 hidden-mobile">
                    Valor
                </th>
                <th scope="col" class="px-6 py-3 hidden-mobile">
                    Data
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Editar</span>
                </th>
            </tr>
        </livewire:components.table.thead>


        <tbody>
            @foreach ($this->receipts as $item)
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $item->payer }}
                    </th>
                    <td class="px-6 py-4 hidden-mobile">
                        R$ {{ $item->value }}
                    </td>
                    <td class="px-6 py-4 hidden-mobile">
                        {{ formatDate($item->date) }}
                    </td>
                    <td class="px-6 py-4 text-right">
                        <button type="button" wire:click="delete({{ $item->id }})"
                            wire:confirm="Você tem certeza que deseja excluir esse recibo?"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Excluir</button> /
                        <a href="{{ route('receipt.detail', ['receipt' => $item->id]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Ver</a>

                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
    <div class="p-5">
        {{ $this->receipts->links('pagination::tailwind') }}

    </div>
</div>
