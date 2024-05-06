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
    <nav class="w-full fixed top-0 bg-[#00000010] backdrop-blur-lg z-10">
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

    <header
        class="w-full pt-[74px] pb-[34px] bg-[url('{{ asset('images/backgrounds/hero-image.png') }}')] bg-cover bg-no-repeat bg-center relative z-0">
        <div class="container max-w-[1130px] mx-auto flex flex-col items-center justify-center gap-[34px] z-10">
            <div class="flex flex-col gap-2 text-center w-fit mt-20 z-10">
                <h1 class="font-semibold text-[60px] leading-[130%]">Search Products</h1>
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
        <h2 class="font-semibold text-[32px]">Results</h2>
        <div class="grid grid-cols-4 gap-[22px]">
            <div class="product-card flex flex-col rounded-[18px] bg-[#181818] overflow-hidden">
                <a href="details.html" class="thumbnail w-full h-[180px] flex shrink-0 overflow-hidden relative">
                    <img src="{{ asset('images/thumbnails/img1.png') }}" class="w-full h-full object-cover"
                        alt="thumbnail">
                    <p class="backdrop-blur bg-black/30 rounded-[4px] p-[4px_8px] absolute top-3 right-[14px] z-10">Rp
                        129,000</p>
                </a>
                <div class="p-[10px_14px_12px] h-full flex flex-col justify-between gap-[14px]">
                    <div class="flex flex-col gap-1">
                        <a href="details.html" class="font-semibold line-clamp-2 hover:line-clamp-none">SaaS Website
                            Master Template: Streamline Your Digital Solution</a>
                        <p
                            class="bg-[#2A2A2A] font-semibold text-xs text-belibang-grey rounded-[4px] p-[4px_6px] w-fit">
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

    <footer class="bg-[#181818] py-[34px]">
        <div class="container max-w-[1130px] mx-auto flex flex-col gap-[66px]">
            <div class="flex justify-between">
                <div class="flex flex-col justify-between">
                    <div class="flex shrink-0">
                        <img src="{{ asset('images/logos/logo.svg') }}" alt="logo">
                    </div>
                    <div class="flex flex-col gap-[10px]">
                        <p class="font-semibold text-sm">Connect with us</p>
                        <div class="flex items-center gap-5">
                            <a href=""
                                class="w-9 h-9 flex shrink-0 rounded-full overflow-hidden border border-[#595959] items-center justify-center">
                                <img src="{{ asset('images/logos/dribbble.svg') }}" class="w-6 h-6" alt="icon">
                            </a>
                            <a href=""
                                class="w-9 h-9 flex shrink-0 rounded-full overflow-hidden border border-[#595959] items-center justify-center">
                                <img src="{{ asset('images/logos/facebook.svg') }}" class="w-6 h-6" alt="icon">
                            </a>
                            <a href=""
                                class="w-9 h-9 flex shrink-0 rounded-full overflow-hidden border border-[#595959] items-center justify-center">
                                <img src="{{ asset('images/logos/apple.svg') }}" class="w-6 h-6" alt="icon">
                            </a>
                            <a href=""
                                class="w-9 h-9 flex shrink-0 rounded-full overflow-hidden border border-[#595959] items-center justify-center">
                                <img src="{{ asset('images/logos/figma.svg') }}" class="w-6 h-6" alt="icon">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex gap-[72px]">
                    <div class="flex flex-col gap-8">
                        <p class="font-semibold text-sm">Browse</p>
                        <div class="flex flex-col gap-[18px]">
                            <a href="" class="text-belibang-grey font-semibold text-xs">All Products</a>
                            <a href="" class="text-belibang-grey font-semibold text-xs">Templates</a>
                            <a href="" class="text-belibang-grey font-semibold text-xs">Ebooks</a>
                            <a href="" class="text-belibang-grey font-semibold text-xs">Courses</a>
                            <a href="" class="text-belibang-grey font-semibold text-xs">Fonts</a>
                        </div>
                    </div>
                    <div class="flex flex-col gap-8">
                        <p class="font-semibold text-sm">Platform</p>
                        <div class="flex flex-col gap-[18px]">
                            <a href="" class="text-belibang-grey font-semibold text-xs">All-Access Pass</a>
                            <a href="" class="text-belibang-grey font-semibold text-xs">Become an author</a>
                            <a href="" class="text-belibang-grey font-semibold text-xs">Affiliate program</a>
                            <a href="" class="text-belibang-grey font-semibold text-xs">Terms & Licensing</a>
                        </div>
                    </div>
                    <div class="flex flex-col gap-8">
                        <p class="font-semibold text-sm">Customer service</p>
                        <div class="flex flex-col gap-[18px]">
                            <a href="" class="text-belibang-grey font-semibold text-xs">FAQ</a>
                            <a href="" class="text-belibang-grey font-semibold text-xs">Orders</a>
                            <a href="" class="text-belibang-grey font-semibold text-xs">Payments</a>
                            <a href="" class="text-belibang-grey font-semibold text-xs">refunds</a>
                        </div>
                    </div>
                    <div class="flex flex-col gap-8">
                        <p class="font-semibold text-sm">Contact us</p>
                        <div class="flex flex-col gap-[18px]">
                            <a href="" class="text-belibang-grey font-semibold text-xs">About us</a>
                            <a href="" class="text-belibang-grey font-semibold text-xs">Company</a>
                            <a href="" class="text-belibang-grey font-semibold text-xs">Careers</a>
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-[10px] text-[#595959]">© 2024, Belibang LLC.</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

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
</body>

</html>