@extends('front.layouts.app')
@section('title', 'Mama Nadya Marketplace')
@section('content')

    {{-- karena di dlm compponent maka manggilnya sprti ini --}}
    <x-navbar />

    <header
        class="w-full pt-[74px] pb-[34px] bg-[url('{{ asset('images/backgrounds/hero-image.png') }}')] bg-cover bg-no-repeat bg-center relative z-0">
        <div class="container max-w-[1130px] mx-auto flex flex-col items-center justify-center gap-[34px] z-10">
            <div class="flex flex-col gap-2 text-center w-fit mt-20 z-10">
                <h1 class="font-semibold text-[60px] leading-[130%]">Ebooks</h1>
            </div>
            <div class="flex w-full justify-center mb-[34px] z-10">
                <form
                    class="group/search-bar p-[14px_18px] bg-belibang-darker-grey ring-1 ring-[#414141] hover:ring-[#888888] max-w-[560px] w-full rounded-full transition-all duration-300">
                    <div class="relative text-left">
                        <button class="absolute inset-y-0 left-0 flex items-center">
                            <img src="{{ asset('images/icons/search-normal.svg') }}" alt="icon">
                        </button>
                        <input type="text" id="searchInput"
                            class="bg-belibang-darker-grey w-full pl-[36px] focus:outline-none placeholder:text-[#595959] pr-9"
                            placeholder="Type anything to search..." />
                        <input type="reset" id="resetButton"
                            class="close-button hidden w-[38px] h-[38px] flex shrink-0 bg-[url('{{ asset('images/icons/close.svg') }}')] hover:bg-[url('{{ asset('images/icons/close-white.svg') }}')] transition-all duration-300 appearance-none transform -translate-x-1/2 -translate-y-1/2 absolute top-1/2 -right-5"
                            value="">
                    </div>
                </form>
            </div>
        </div>
        <div class="w-full h-full absolute top-0 bg-gradient-to-b from-belibang-black/70 to-belibang-black z-0"></div>
    </header>

    <section id="NewProduct" class="container max-w-[1130px] mx-auto mb-[102px] flex flex-col gap-8">
        <h2 class="font-semibold text-[32px]">New Product</h2>
        <div class="grid grid-cols-4 gap-[22px]">
            <div class="product-card flex flex-col rounded-[18px] bg-[#181818] overflow-hidden">
                <a href="details.html" class="thumbnail w-full h-[180px] flex shrink-0 overflow-hidden relative">
                    <img src="{{ asset('images/thumbnails/img1.png') }}" class="w-full h-full object-cover" alt="thumbnail">
                    <p class="backdrop-blur bg-black/30 rounded-[4px] p-[4px_8px] absolute top-3 right-[14px] z-10">Rp
                        129,000</p>
                </a>
                <div class="p-[10px_14px_12px] h-full flex flex-col justify-between gap-[14px]">
                    <div class="flex flex-col gap-1">
                        <a href="details.html" class="font-semibold line-clamp-2 hover:line-clamp-none">SaaS Website
                            Master Template: Streamline Your Digital Solution</a>
                        <p class="bg-[#2A2A2A] font-semibold text-xs text-belibang-grey rounded-[4px] p-[4px_6px] w-fit">
                            Template</p>
                    </div>
                    <div class="flex items-center gap-[6px]">
                        <div class="w-6 h-6 flex shrink-0 items-center justify-center rounded-full overflow-hidden">
                            <img src="{{ asset('images/logos/framer.png') }}" class="w-full h-full object-cover"
                                alt="logo">
                        </div>
                        <a href="" class="font-semibold text-xs text-belibang-grey">Framer</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-testimonials />

    <x-tools />



    {{-- footer --}}
    <x-footer />

@endsection


@push('after-script')
    <script>
        $('.testi-carousel').flickity({
            // options
            cellAlign: 'left',
            contain: true,
            pageDots: false,
            prevNextButtons: false,
        });

        // previous
        $('.btn-prev').on('click', function() {
            $('.testi-carousel').flickity('previous', true);
        });

        // next
        $('.btn-next').on('click', function() {
            $('.testi-carousel').flickity('next', true);
        });
    </script>

    <script>
        const searchInput = document.getElementById('searchInput');
        const resetButton = document.getElementById('resetButton');

        searchInput.addEventListener('input', function() {
            if (this.value.trim() !== '') {
                resetButton.classList.remove('hidden');
            } else {
                resetButton.classList.add('hidden');
            }
        });

        resetButton.addEventListener('click', function() {
            resetButton.classList.add('hidden');
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuButton = document.getElementById('menu-button');
            const dropdownMenu = document.querySelector('.dropdown-menu');

            menuButton.addEventListener('click', function() {
                dropdownMenu.classList.toggle('hidden');
            });

            // Close the dropdown menu when clicking outside of it
            document.addEventListener('click', function(event) {
                const isClickInside = menuButton.contains(event.target) || dropdownMenu.contains(event
                    .target);
                if (!isClickInside) {
                    dropdownMenu.classList.add('hidden');
                }
            });
        });
    </script>
@endpush
