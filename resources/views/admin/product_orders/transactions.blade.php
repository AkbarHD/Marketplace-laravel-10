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
                            <p>{{ $transaction->Product->Category->name }}</p> {{-- 2 relasi bergabung --}}
                        </div>
                        <div>
                            <p>Rp. {{ $transaction->price }}</p>
                        </div>
                        <div>
                            <p>{{ $transaction->is_paid }}</p>
                        </div>
                        <div class="flex flex-row gap-x-3">
                            <a href="{{ route('admin.products.show', $transaction->id) }}"
                                class="w-fit px-5 py-3 rounded-md bg-indigo-500 text-white">
                                Detail
                            </a>

                        </div>
                    </div>
                @empty
                    <p>
                        Belum ada yang membeli product kamu😉
                    </p>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
