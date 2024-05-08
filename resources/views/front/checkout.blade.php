@extends('front.layouts.app')
@section('title', 'Mama Nadya Marketplace')
@section('content')

    {{-- karena di dlm compponent maka manggilnya sprti ini --}}
    <x-navbar />


    <nav class="w-full bg-[#00000010] backdrop-blur-lg z-10">
        <div class="container max-w-[1130px] mx-auto flex items-center justify-between h-[74px]">
            <div class="flex items-center gap-[26px]">
                <a href="index.html" class="flex w-[154px] shrink-0 items-center">
                    <img src="{{ asset('images/logos/logo.svg') }}" alt="logo">
                </a>
                <ul class="flex gap-6 items-center">
                    <li class="text-belibang-grey hover:text-belibang-light-grey transition-all duration-300">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="text-belibang-grey hover:text-belibang-light-grey transition-all duration-300 relative">
                        <button id="menu-button" class="flex items-center gap-1 focus:text-belibang-light-grey">
                            <span>Categories</span>
                            <img src="{{ asset('images/icons/arrow-down.svg') }}" alt="icon">
                        </button>
                        <div
                            class="dropdown-menu hidden absolute top-[52px] grid grid-cols-2 p-4 gap-[10px] w-[526px] rounded-[20px] bg-[#1E1E1E] border border-[#414141] z-10">
                            <div
                                class="col-span-2 flex justify-between items-center rounded-2xl p-[12px_16px] border border-[#414141] hover:bg-[#2A2A2A] transition-all duration-300">
                                <div class="flex items-center">
                                    <a href="" class="w-[58px] h-[58px] flex shrink-0 flex items-center">
                                        <img src="{{ asset('images/icons/cart.svg') }}" alt="icon">
                                    </a>
                                    <a href="" class="flex flex-col">
                                        <p class="font-bold text-sm text-white">All Products</p>
                                        <p class="text-xs text-belibang-grey">Everything in One Place</p>
                                    </a>
                                </div>
                                <div class="w-6 h-6 flex shrink-0">
                                    <img src="{{ asset('images/icons/crown.svg') }}" alt="icon">
                                </div>
                            </div>
                            <div
                                class="flex justify-between items-center rounded-2xl p-[12px_16px] border border-[#414141] hover:bg-[#2A2A2A] transition-all duration-300">
                                <div class="flex items-center">
                                    <a href="" class="w-[58px] h-[58px] flex shrink-0 flex items-center">
                                        <img src="{{ asset('images/icons/laptop.svg') }}" alt="icon">
                                    </a>
                                    <a href="" class="flex flex-col">
                                        <p class="font-bold text-sm text-white">Templates</p>
                                        <p class="text-xs text-belibang-grey">Designs Made Easy</p>
                                    </a>
                                </div>
                            </div>
                            <div
                                class="flex justify-between items-center rounded-2xl p-[12px_16px] border border-[#414141] hover:bg-[#2A2A2A] transition-all duration-300">
                                <div class="flex items-center">
                                    <a href="" class="w-[58px] h-[58px] flex shrink-0 flex items-center">
                                        <img src="{{ asset('images/icons/hat.svg') }}" alt="icon">
                                    </a>
                                    <a href="" class="flex flex-col">
                                        <p class="font-bold text-sm text-white">Courses</p>
                                        <p class="text-xs text-belibang-grey">Expand Your Skills</p>
                                    </a>
                                </div>
                            </div>
                            <div
                                class="flex justify-between items-center rounded-2xl p-[12px_16px] border border-[#414141] hover:bg-[#2A2A2A] transition-all duration-300">
                                <div class="flex items-center">
                                    <a href="" class="w-[58px] h-[58px] flex shrink-0 flex items-center">
                                        <img src="{{ asset('images/icons/book.svg') }}" alt="icon">
                                    </a>
                                    <a href="" class="flex flex-col">
                                        <p class="font-bold text-sm text-white">Ebooks</p>
                                        <p class="text-xs text-belibang-grey">Read and Learn</p>
                                    </a>
                                </div>
                            </div>
                            <div
                                class="flex justify-between items-center rounded-2xl p-[12px_16px] border border-[#414141] hover:bg-[#2A2A2A] transition-all duration-300">
                                <div class="flex items-center">
                                    <a href="" class="w-[58px] h-[58px] flex shrink-0 flex items-center">
                                        <img src="{{ asset('images/icons/pen.svg') }}" alt="icon">
                                    </a>
                                    <a href="" class="flex flex-col">
                                        <p class="font-bold text-sm text-white">Fonts</p>
                                        <p class="text-xs text-belibang-grey">Typography Selection</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="text-belibang-grey hover:text-belibang-light-grey transition-all duration-300">
                        <a href="">Stories</a>
                    </li>
                    <li class="text-belibang-grey hover:text-belibang-light-grey transition-all duration-300">
                        <a href="">Benefits</a>
                    </li>
                    <li class="text-belibang-grey hover:text-belibang-light-grey transition-all duration-300">
                        <a href="">About</a>
                    </li>
                </ul>
            </div>
            <div class="flex gap-6 items-center">
                <a href="" class="text-belibang-grey hover:text-belibang-light-grey transition-all duration-300">Log
                    in</a>
                <a href=""
                    class="p-[8px_16px] w-fit h-fit rounded-[12px] text-belibang-grey border border-belibang-dark-grey hover:bg-[#2A2A2A] hover:text-white transition-all duration-300">Sign
                    up</a>
            </div>
        </div>
    </nav>

    <section id="checkout" class="container max-w-[1130px] mx-auto mt-[30px]">
        <div class="w-full flex justify-center gap-[118px]">
            <div class="product-info flex flex-col gap-4 w-min h-fit mt-[18px]">
                <h1 class="font-semibold text-[32px] ">Checkout Product</h1>
                <div class="product-detail flex flex-col gap-3">
                    <div class="thumbnail w-[412px] h-[255px] flex shrink-0 rounded-[20px] overflow-hidden">
                        <img src="{{ asset('images/thumbnails/checkout.png') }}" class="w-full h-full object-cover"
                            alt="thumbnail">
                    </div>
                    <div class="product-title flex flex-col gap-[30px]">
                        <div class="flex flex-col gap-3">
                            <p class="font-semibold">{{ $product->name }}
                            </p>
                            <p
                                class="bg-[#2A2A2A] font-semibold text-xs text-belibang-grey rounded-[4px] p-[4px_6px] w-fit">
                                {{ $product->Category->name }}</p>
                        </div>
                        <div class="flex justify-between items-center">
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 rounded-full flex shrink-0 overflow-hidden">
                                    <img src="{{ Storage::url($product->Creator->avatar) }}" alt="logo">
                                </div>
                                <p class="font-semibold text-belibang-grey">
                                    {{ Str::limit(strip_tags($product->Creator->name), 12, '...') }}</p>
                            </div>
                            <p
                                class="font-semibold text-4xl bg-clip-text text-transparent bg-gradient-to-r from-[#B05CB0] to-[#FCB16B]">
                                Rp. {{ number_format($product->price) }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <form class="flex flex-col p-[30px] gap-[60px] rounded-[20px] w-[450px] border-2 border-belibang-darker-grey">
                <div class="w-full flex flex-col gap-4">
                    <p class="font-semibold text-xl">Transfer to:</p>
                    <div class="flex flex-col gap-3">
                        <div class="flex gap-3">
                            <div
                                class="flex items-center gap-1 p-[12px_20px] pl-4 w-[163px] justify-between rounded-lg bg-[#181818] hover:ring-[1px] hover:ring-[#A0A0A0] focus:ring-[1px] focus:ring-[#A0A0A0] transition-all duration-300">
                                <div class="flex flex-col">
                                    <label for="bank" class="text-xs text-belibang-grey pl-1">Bank Name</label>
                                    <select name="bank" id="bank"
                                        class="mt-1 font-semibold bg-transparent appearance-none outline-none px-1 invalid:text-[#595959] invalid:font-normal invalid:text-sm"
                                        required>
                                        <option class="text-belibang-black" value="Angga Bank" selected>
                                            {{ $product->Creator->bank_name }}</option>
                                    </select>
                                </div>
                                <div class="w-6 h-6 flex shrink-0">
                                    <img src="{{ asset('images/icons/bank.svg') }}" alt="icon">
                                </div>
                            </div>
                            <div
                                class="flex items-center gap-1 p-[12px_20px] pl-4 w-[215px] justify-between rounded-lg bg-[#181818] hover:ring-[1px] hover:ring-[#A0A0A0] focus:ring-[1px] focus:ring-[#A0A0A0] transition-all duration-300">
                                <div class="flex flex-col w-full">
                                    <label for="name" class="text-xs text-belibang-grey pl-1">Account Name</label>
                                    <div class="flex mt-1 items-center max-w-[149px]">
                                        <input disabled type="text" name="name"
                                            value="{{ $product->Creator->bank_account }}" id="name"
                                            class="font-semibold bg-transparent appearance-none autofull-no-bg outline-none px-1 placeholder:text-[#595959] placeholder:font-normal placeholder:text-sm w-full"
                                            placeholder="Type here" required></input>
                                    </div>
                                </div>
                                <div class="w-6 h-6 flex shrink-0">
                                    <img src="{{ asset('images/icons/user-square.svg') }}" alt="icon">
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex items-center gap-1 p-[12px_20px] pl-4 justify-between rounded-lg bg-[#181818] hover:ring-[1px] hover:ring-[#A0A0A0] focus:ring-[1px] focus:ring-[#A0A0A0] transition-all duration-300">
                            <div class="flex flex-col w-full">
                                <label for="number" class="text-xs text-belibang-grey pl-1">Account Number</label>
                                <div class="flex mt-1 items-center max-w-[322px]">
                                    <input type="tel" name="number" disabled id="number"
                                        class="mt-1 font-semibold bg-transparent appearance-none autofull-no-bg outline-none px-1 placeholder:text-[#595959] placeholder:font-normal placeholder:text-sm w-full"
                                        placeholder="Type here" value="{{ $product->Creator->bank_account_number }}"
                                        pattern="[0-9 -]" required></input>
                                </div>
                            </div>
                            <div class="w-6 h-6 flex shrink-0">
                                <img src="{{ asset('images/icons/card.svg') }}" alt="icon">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full flex flex-col gap-4">
                    <p class="font-semibold text-xl">Confirm Payment</p>
                    <div class="flex flex-col gap-3">
                        <p class="text-xs text-[#2D68F8] p-[10px_22px] rounded-lg bg-[#2D68F805]">Please upload proof
                            of
                            payment we will confirm it as soon as possible</p>
                        <div class="flex gap-3">
                            <button type="button"
                                class="flex gap-2 shrink-0 w-[291px] h-[48px] p-[12px_18px] justify-center items-center border border-dashed border-[#595959] rounded-lg hover:bg-[#2A2A2A] transition-all duration-300"
                                onclick="document.getElementById('proof').click()">
                                <p>Choose File</p>
                                <img src="{{ asset('images/icons/document-upload.svg') }}" alt="icon">
                            </button>
                            <input type="file" name="proof" id="proof" class="hidden" onchange="previewFile()"
                                required>

                            <div class="relative rounded-lg overflow-hidden bg-[#181818] w-full h-[48px]">
                                <div class="relative file-preview z-10 w-full h-full hidden">
                                    {{-- <img src="{{ asset('images/icons/check.svg') }}"
                                        class="check-icon absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                        alt="icon"> --}}
                                    <img src="" class="thumbnail-proof w-full h-full object-cover"
                                        alt="thumbnail">
                                </div>
                                <img src="{{ asset('images/icons/gallery.svg') }}"
                                    class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="icon">
                            </div>

                        </div>
                    </div>
                    <a href="success-checkout.html"
                        class="rounded-full text-center bg-[#2D68F8] p-[8px_18px] font-semibold hover:bg-[#083297] active:bg-[#062162] transition-all duration-300">Checkout
                        Now</a>
                </div>

            </form>
        </div>
    </section>
@endsection

@push('after-script')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        function previewFile() {
            var preview = document.querySelector('.file-preview');
            var fileInput = document.querySelector('input[type=file]').files[0];
            var reader = new FileReader();

            reader.onloadend = function() {
                var img = preview.querySelector('.thumbnail-proof'); // Get the thumbnail image element
                img.src = reader.result; // Update src attribute with the uploaded file
                preview.classList.remove('hidden'); // Remove the 'hidden' class to display the preview
            }

            if (fileInput) {
                reader.readAsDataURL(fileInput);
            } else {
                preview.classList.add('hidden'); // Hide preview if no file selected
            }
        }
    </script>
    <script>
        function copyTextFunc(id) {
            var copyText = document.getElementById(id);

            copyText.select();
            copyText.setSelectionRange(0, 99999); // For mobile devices

            document.execCommand("copy");

            alert("Copied the text: " + copyText.value);
        }
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
