<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden p-10 shadow-sm sm:rounded-lg flex flex-col gap-y-5">
                <a href="{{ route('admin.products.create') }}"
                    class="w-fit px-5 py-3 rounded-md bg-indigo-950 text-white">
                    Add Product
                </a>

                @forelse ($products as $product)
                    <div class="item-product flex flex-row justify-between items-center">
                        <img src="{{ Storage::url($product->cover) }}" class="h-[100px] w-auto" alt="">
                        <div>
                            <h3>{{ $product->name }}</h3>
                            <p>{{ $product->Category->name }}</p>
                            <p>{{ $product->Creator->name }}</p>
                        </div>
                        <div>
                            <p>Rp. {{ $product->price }}</p>
                        </div>
                        <div class="flex flex-row gap-x-3">
                            <a href="{{ route('admin.products.edit', $product->id) }}"
                                class="w-fit px-5 py-3 rounded-md bg-indigo-500 text-white">
                                Edit
                            </a>
                            <form action="{{ route('admin.products.destroy', $product) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="w-fit px-5 py-3 rounded-md bg-red-500 text-white">
                                    Delete
                                </button>
                            </form>

                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
