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
                    <div class="item-product flex flex-row justify-between text-center items-center">
                        <img src="{{ Storage::url($transaction->Product->cover) }}" class="h-[100px] w-auto"
                            alt="">
                        <div>
                            <h3 class="text-indigo-950 font-bold text-lg">{{ $transaction->Product->name }}</h3>
                            <p class="text-slate-500 text-sm">{{ $transaction->Product->Category->name }}</p>
                            {{-- bisa ambil relasi, pdhl di prodcut transaction tdk ada relasi ke categry dan dia bs ambil lewat table product --}}
                        </div>
                        <div>
                            <p class="text-sm text-slate-500">Total Price:</p>
                            <p>Rp. {{ $transaction->total_price }}</p>
                        </div>
                        <div>
                            <div>
                                <p class="text-slate-500 text-sm">status :</p>
                                @if ($transaction->is_paid)
                                    <span class="py-1 px-3 rounded-full bg-green-500 text-white font-bold text-sm">
                                        PAID
                                    </span>
                                @else
                                    <span class="py-1 px-3 rounded-full bg-orange-500 text-white font-bold text-sm">
                                        PENDING
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="flex flex-row gap-x-3">
                            <a href="{{ route('admin.product_orders.transactions.details', $transaction) }}"
                                class="w-fit px-5 py-3 rounded-full bg-indigo-500 font-bold text-white">
                                Detail
                            </a>

                        </div>
                    </div>
                @empty
                    <p>
                    <h3 class="text-indigo-950 font-bold text-xl">My Product</h3>
                    Belum ada Product yang kamu beli 😉
                    </p>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
