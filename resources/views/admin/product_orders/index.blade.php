<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Orders') }}
        </h2>
    </x-slot>

    {{-- dapet dari dashboard.blade.php blade tempalating --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden p-10 shadow-sm sm:rounded-lg flex flex-col gap-y-5">
                {{-- <a href="{{ route('admin.products.create') }}"
                    class="w-fit px-5 py-3 rounded-md bg-indigo-950 text-white">
                    Add Product
                </a> --}}

                @forelse ($my_orders as $order)
                    <div class="item-product flex flex-row justify-between text-center items-center">
                        <img src="{{ Storage::url($order->Product->cover) }}" class="h-[100px] w-auto" alt="">
                        <div>
                            <h3 class="text-indigo-950 font-bold text-lg">{{ $order->Product->name }}</h3>
                        </div>
                        {{-- <div>
                            <p>{{ $order->Product->Category->name }}</p>
                        </div> --}}
                        <div>
                            <p>Rp {{ number_format($order->total_price) }}</p>
                        </div>
                        <div class="">
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
                        <div class="flex flex-row gap-x-3">
                            <a href="{{ route('admin.product_orders.show', $order->id) }}"
                                class="w-fit px-5 py-3 rounded-full bg-indigo-500 text-white">
                                Detail
                            </a>

                        </div>
                    </div>
                @empty
                    <p>
                        <a href="{{ route('admin.dashboard') }}"></a>
                    <h3 class="text-indigo-950 font-bold text-xl">My Orders</h3>
                    Belum ada yang membeli product kamu😉
                    </p>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
