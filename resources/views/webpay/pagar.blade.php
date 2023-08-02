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
                    <p>Pagando...</p>
                    <form action="{{ $datos->url }}" name="form" method="POST">
                        <input type="hidden" name="token_ws" value="{{ $datos->token }}">
                    </form>
                    <script type="text/javascript">
                        window.onload = function () {
                            document.form.submit();
                        };
                    </script>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>