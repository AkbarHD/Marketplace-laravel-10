<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./output.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
</head>

<body class="bg-belibang-black font-poppins text-white">
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
                <a href=""
                    class="text-belibang-grey hover:text-belibang-light-grey transition-all duration-300">Log
                    in</a>
                <a href=""
                    class="p-[8px_16px] w-fit h-fit rounded-[12px] text-belibang-grey border border-belibang-dark-grey hover:bg-[#2A2A2A] hover:text-white transition-all duration-300">Sign
                    up</a>
            </div>
        </div>
    </nav>

    <section id="Success" class="container max-w-[1130px] mx-auto">
        <div class="w-full flex items-center justify-center min-h-[calc(100vh-74px)]">
            <div class="flex flex-col items-center gap-[60px]">
                <div class="flex flex-col items-center">
                    <div class="flex shrink-0 w-[174px] h-[174px] relative -z-10">
                        <img src="{{ asset('images/icons/check-3d.svg') }}" alt="icon">
                        <div class="flex shrink-0 w-[644px] absolute -translate-x-1/2 left-1/2 bottom-[35px] z-0">
                            <img src="{{ asset('images/backgrounds/glitter.svg') }}" alt="background">
                        </div>
                    </div>
                    <div class="flex flex-col text-center gap-1">
                        <p
                            class="font-semibold text-[36px] bg-clip-text text-transparent bg-gradient-to-r from-[#B05CB0] to-[#FCB16B]">
                            Success Checkout</p>
                        <p class="text-xs text-belibang-grey">Thank you for supporting our great creators</p>
                    </div>
                </div>
                <a href="index.html"
                    class="w-[306px] h-12 flex items-center justify-center rounded-full text-center bg-[#2D68F8] p-[8px_18px] font-semibold hover:bg-[#083297] active:bg-[#062162] transition-all duration-300">Check
                    My Transactions</a>
            </div>
        </div>
    </section>

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

</body>

</html>
