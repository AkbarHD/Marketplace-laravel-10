<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Transactions') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden p-10 shadow-sm sm:rounded-lg flex flex-col gap-y-5">


                @forelse ($my_transactions as $transaction)
                    <div class="item-product flex flex-row justify-between items-center">
                        <img src="{{ Storage::url($transaction->Product->cover) }}" class="h-[100px] w-auto"
                            alt="">
                        <div>
                            <h3>{{ $transaction->Product->name }}</h3>
                            <p>{{ $transaction->Product->Category->name }}</p> {{-- bisa ambil relasi, pdhl di prodcut transaction tdk ada relasi ke categry dan dia bs ambil lewat table product --}}
                        </div>
                        <div>
                            <p>Rp. {{ $transaction->total_price }}</p>
                        </div>
                        <div>
                            <div>
                                @if ($transaction->is_paid)
                                    <span class="py-2 px-5 rounded-full bg-green-500 text-white font-bold text-sm">
                                        PAID
                                    </span>
                                @else
                                    <span class="py-2 px-5 rounded-full bg-orange-500 text-white font-bold text-sm">
                                        PENDING
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="flex flex-row gap-x-3">
                            <a href="{{ route('admin.product_orders.transactions.details', $transaction) }}"
                                class="w-fit px-5 py-3 rounded-md bg-indigo-500 text-white">
                                Detail
                            </a>

                        </div>
                    </div>
                @empty
                    <p>
                        Belum ada Product yang kamu membeli 😉
                    </p>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
