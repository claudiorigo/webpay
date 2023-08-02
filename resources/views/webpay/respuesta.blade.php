<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('WebPay Plus') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-4 border-b-2 border-transparent text-xl font-medium leading-5 text-gray-500">Pago Exitoso</div>
                    <div class="w-full h-px bg-gray-200 my-6" style="opacity: 1; transform-origin: 50% 50% 0px;"></div>
                    {{-- {{ print_r($datos) }} --}}
                    <ul role="list">
                        <li class="flex py-1 first:pt-0 last:pb-0">VCI: <span>{{ $datos->vci }}</span></li>
                        <li class="flex py-1 first:pt-0 last:pb-0">Amount: <span>{{ $datos->amount }}</span></li>
                        <li class="flex py-1 first:pt-0 last:pb-0">Status: <span>{{ $datos->status }}</span></li>
                        <li class="flex py-1 first:pt-0 last:pb-0">buy_order: <span>{{ $datos->buy_order }}</span></li>
                        <li class="flex py-1 first:pt-0 last:pb-0">session_id: <span>{{ $datos->session_id }}</span></li>
                        <li class="flex py-1 first:pt-0 last:pb-0">card_detail: <span>{{ $datos->card_detail->card_number }}</span></li>
                        <li class="flex py-1 first:pt-0 last:pb-0">accounting_date: <span>{{ $datos->accounting_date }}</span></li>
                        <li class="flex py-1 first:pt-0 last:pb-0">transaction_date: <span>{{ $datos->transaction_date }}</span></li>
                        <li class="flex py-1 first:pt-0 last:pb-0">authorization_code: <span>{{ $datos->authorization_code }}</span></li>
                        <li class="flex py-1 first:pt-0 last:pb-0">payment_type_code: <span>{{ $datos->payment_type_code }}</span></li>
                        <li class="flex py-1 first:pt-0 last:pb-0">response_code: <span>{{ $datos->response_code }}</span></li>
                        <li class="flex py-1 first:pt-0 last:pb-0">installments_number: <span>{{ $datos->installments_number }}</span></li>
                    </ul>
                    <x-primary-button class="ml-3 mt-2">
                        <a href="{{ route('webpay_inicio') }}">
                            {{ __('Volver') }}
                        </a>
                    </x-primary-button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>