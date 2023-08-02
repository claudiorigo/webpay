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
                    <ul>
                        <li><strong>Producto</strong>: Mesa de computador</li>
                        <li><strong>Valor</strong>: $10.000</li>
                        <li><strong>Cantidad</strong>: 1</li>
                        <li><strong>Orden de compra</strong>: 34324</li>
                    </ul>
                    
                    <x-primary-button class="ml-3 mt-2">
                        <a href="{{ route('webpay_pagar') }}">
                            {{ __('Pagar') }}
                        </a>
                    </x-primary-button>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>