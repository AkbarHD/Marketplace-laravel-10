<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Dashboard') }}
        </h2>
    </x-slot>

    {{-- dapet dari dashboard.blade.php blade tempalating --}}
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden p-10 shadow-sm sm:rounded-lg flex flex-col gap-y-5">

                <h3 class="text-indigo-950 font-bold text-xl">Overview</h3>
                <div class="flex flex-row justify-between ">
                    {{-- <div>
                        <p class="text-sm text-slate-500">Total Price :</p>
                        <p class="text-indigo-950 font-bold text-xl">Rp. {{ number_format(227000) }}</p>
                    </div> --}}

                    <div>
                        <p class="text-sm text-slate-500">Total Product :</p>
                        <p class="text-indigo-950 font-bold text-xl">{{ count($my_products) }}</p>
                    </div>

                    <div>
                        <p class="text-sm text-slate-500">Order Success :</p>
                        <p class="text-indigo-950 font-bold text-xl">{{ count($total_order_success) }}</p>
                    </div>

                    <div>
                        <p class="text-sm text-slate-500">Order Pending :</p>
                        <p class="text-indigo-950 font-bold text-xl">{{ count($total_order_pending) }}</p>
                    </div>

                    <div>
                        <p class="text-sm text-slate-500">Total Revenue :</p>
                        <p class="text-indigo-950 font-bold text-xl">{{ number_format($my_revenue) }}</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
