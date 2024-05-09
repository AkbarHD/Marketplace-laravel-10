<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden p-10 shadow-sm sm:rounded-lg flex flex-col gap-y-5">
                {{-- <a href="{{ route('admin.products.create') }}"
                    class="w-fit px-5 py-3 rounded-md bg-indigo-950 text-white">
                    Add Product
                </a> --}}

                <div class="item-product flex flex-col gap-y-6 ">
                    <img src="{{ Storage::url($order->Product->cover) }}" class="h-[auto] w-[300px]" alt="">
                    <div>
                        <h3 class="text-indigo-950 text-lg font-bold">{{ $order->Product->name }}</h3>
                        <p>{{ $order->Product->Category->name }}</p> {{-- 2 relasi bergabung --}}

                    </div>
                    <hr>

                    <div class="text-sm text-slate-500">
                        <p>Buyer : {{ $order->Buyer->name }}</p> {{-- 2 relasi bergabung --}}
                    </div>
                    <hr>

                    <div class="flex gap-3 flex-row items-center">
                        <p>Rp. {{ $order->total_price }}</p>
                        <div>
                            @if ($order->is_paid)
                                <span class="py-2 px-5 rounded-full bg-green-500 text-white font-bold text-sm">
                                    PAID
                                </span>
                            @else
                                <span class="py-2 px-5 rounded-full bg-orange-500 text-white font-bold text-sm">
                                    PENDING
                                </span>
                            @endif
                        </div>

                        <div>
                            <img src="{{ Storage::url($order->proof) }}" class="h-[auto] w-[300px]" alt="">
                        </div>
                    </div>
                    <div class="flex flex-row gap-x-3">
                        <form action="{{ route('admin.product_orders.update', $order) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="w-fit px-5 py-3 rounded-md bg-indigo-500 text-white">
                                Approve Now
                            </button>
                        </form>
                        {{-- <a href="#" class="w-fit px-5 py-3 rounded-md bg-indigo-500 text-white">
                            Approve Now
                        </a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
