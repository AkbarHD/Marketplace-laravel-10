@extends('front.layouts.app')
@section('title', 'Mama Nadya Marketplace')
@section('content')

    {{-- karena di dlm compponent maka manggilnya sprti ini --}}
    <x-navbar />

    <header
        class="w-full pt-[74px] pb-[34px] bg-[url('{{ asset('images/backgrounds/hero-image.png') }}')] bg-cover bg-no-repeat bg-center relative z-0">
        <div class="container max-w-[1130px] mx-auto flex flex-col items-center justify-center gap-[34px] z-10">
            <div class="flex flex-col gap-2 text-center w-fit mt-20 z-10">
                <h1 class="font-semibold text-[60px] leading-[130%]">Explore High Quality<br>Digital Products</h1>
                <p class="text-lg text-belibang-grey">Change the way you work to achieve better results.</p>
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

    <section id="Category" class="container max-w-[1130px] mx-auto mb-[102px] flex flex-col gap-8">
        <h2 class="font-semibold text-[32px]">Category</h2>
        <div class="flex justify-between items-center">
            <a href="category.html"
                class="group category-card w-fit h-fit p-[1px] rounded-2xl bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                <div
                    class="flex flex-col p-[18px] rounded-2xl w-[210px] bg-img-black-gradient group-active:bg-img-black transition-all duration-300">
                    <div class="w-[58px] h-[58px] flex shrink-0 items-center justify-center">
                        <img src="{{ asset('images/icons/cart.svg') }}" alt="icon">
                    </div>
                    <div class="px-[6px] flex flex-col text-left">
                        <p class="font-bold text-sm">All Products</p>
                        <p class="text-xs text-belibang-grey">Everything in One Place</p>
                    </div>
                </div>
            </a>
            <a href=""
                class="group category-card w-fit h-fit p-[1px] rounded-2xl bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                <div
                    class="flex flex-col p-[18px] rounded-2xl w-[210px] bg-img-black-gradient group-active:bg-img-black transition-all duration-300">
                    <div class="w-[58px] h-[58px] flex shrink-0 items-center justify-center">
                        <img src="{{ asset('images/icons/laptop.svg') }}" alt="icon">
                    </div>
                    <div class="px-[6px] flex flex-col text-left">
                        <p class="font-bold text-sm">Templates</p>
                        <p class="text-xs text-belibang-grey">Designs Made Easy</p>
                    </div>
                </div>
            </a>
            <a href=""
                class="group category-card w-fit h-fit p-[1px] rounded-2xl bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                <div
                    class="flex flex-col p-[18px] rounded-2xl w-[210px] bg-img-black-gradient group-active:bg-img-black transition-all duration-300">
                    <div class="w-[58px] h-[58px] flex shrink-0 items-center justify-center">
                        <img src="{{ asset('images/icons/book.svg') }}" alt="icon">
                    </div>
                    <div class="px-[6px] flex flex-col text-left">
                        <p class="font-bold text-sm">Ebooks</p>
                        <p class="text-xs text-belibang-grey">Read and Learn</p>
                    </div>
                </div>
            </a>
            <a href=""
                class="group category-card w-fit h-fit p-[1px] rounded-2xl bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                <div
                    class="flex flex-col p-[18px] rounded-2xl w-[210px] bg-img-black-gradient group-active:bg-img-black transition-all duration-300">
                    <div class="w-[58px] h-[58px] flex shrink-0 items-center justify-center">
                        <img src="{{ asset('images/icons/hat.svg') }}" alt="icon">
                    </div>
                    <div class="px-[6px] flex flex-col text-left">
                        <p class="font-bold text-sm">Courses</p>
                        <p class="text-xs text-belibang-grey">Expand Your Skills</p>
                    </div>
                </div>
            </a>
            <a href=""
                class="group category-card w-fit h-fit p-[1px] rounded-2xl bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                <div
                    class="flex flex-col p-[18px] rounded-2xl w-[210px] bg-img-black-gradient group-active:bg-img-black transition-all duration-300">
                    <div class="w-[58px] h-[58px] flex shrink-0 items-center justify-center">
                        <img src="{{ asset('images/icons/pen.svg') }}" alt="icon">
                    </div>
                    <div class="px-[6px] flex flex-col text-left">
                        <p class="font-bold text-sm">Fonts</p>
                        <p class="text-xs text-belibang-grey">Typography Selection</p>
                    </div>
                </div>
            </a>
        </div>
    </section>

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

    <section id="Testimonial" class="mb-[102px] flex flex-col gap-8">
        <div class="container max-w-[1130px] mx-auto flex justify-between items-center">
            <h2 class="font-semibold text-[32px]">Customers Are Happy <br>With Our Products</h2>
            <div class="flex gap-[14px] items-center">
                <button class="btn-prev w-10 h-10 shrink-0 rounded-full overflow-hidden rotate-180">
                    <img src="{{ asset('images/icons/circle-arrow-r.svg') }}" alt="icon">
                </button>
                <button class="btn-next w-10 h-10 shrink-0 rounded-full overflow-hidden">
                    <img src="{{ asset('images/icons/circle-arrow-r.svg') }}" alt="icon">
                </button>
            </div>
        </div>
        <div class="w-full overflow-x-hidden no-scrollbar">
            <div class="testi-carousel" data-flickity>
                <div class="flex w-[calc((100vw-1130px-20px)/2)] shrink-0"></div>
                <div
                    class="testimonial-card bg-[#181818] rounded-[20px] flex mr-5 w-[420px] min-h-[256px] shrink-0 overflow-hidden">
                    <div
                        class="p-6 flex flex-col w-full gap-[42px] shrink-0 bg-[url('{{ asset('images/backgrounds/Testimonials-image.png') }}')] bg-contain bg-no-repeat bg-top">
                        <div class="flex flex-col gap-4">
                            <div class="flex items-center ga-[6px]">
                                <img src="{{ asset('images/icons/star.svg') }}" alt="star">
                                <img src="{{ asset('images/icons/star.svg') }}" alt="star">
                                <img src="{{ asset('images/icons/star.svg') }}" alt="star">
                                <img src="{{ asset('images/icons/star.svg') }}" alt="star">
                                <img src="{{ asset('images/icons/star.svg') }}" alt="star">
                            </div>
                            <p class="leading-[26px]">Using these templates has boosted my productivity significantly.
                                Highly recommended for all designers!</p>
                        </div>
                        <div class="flex gap-[14px] items-center">
                            <div class="w-12 h-12 flex shrink-0 rounded-full overflow-hidden">
                                <img src="{{ asset('images/photos/photo1.png') }}" class="w-full h-full object-cover"
                                    alt="photo">
                            </div>
                            <div class="flex flex-col justify-center-center">
                                <p
                                    class="font-semibold text-left leading-[170%] bg-clip-text text-transparent bg-gradient-to-r from-[#B05CB0] to-[#FCB16B]">
                                    Sarah Lopez</p>
                                <p class="font-semibold text-left text-xs text-belibang-grey">Brand Design Consultant
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="testimonial-card bg-[#181818] rounded-[20px] flex mr-5 w-[420px] min-h-[256px] shrink-0 overflow-hidden">
                    <div
                        class="p-6 flex flex-col w-full gap-[42px] shrink-0 bg-[url('{{ asset('images/backgrounds/Testimonials-image.png') }}')] bg-contain bg-no-repeat bg-top">
                        <div class="flex flex-col gap-4">
                            <div class="flex items-center ga-[6px]">
                                <img src="{{ asset('images/icons/star.svg') }}" alt="star">
                                <img src="{{ asset('images/icons/star.svg') }}" alt="star">
                                <img src="{{ asset('images/icons/star.svg') }}" alt="star">
                                <img src="{{ asset('images/icons/star.svg') }}" alt="star">
                                <img src="{{ asset('images/icons/star.svg') }}" alt="star">
                            </div>
                            <p class="leading-[26px]">Using these templates has boosted my productivity significantly.
                                Highly recommended for all designers!</p>
                        </div>
                        <div class="flex gap-[14px] items-center">
                            <div class="w-12 h-12 flex shrink-0 rounded-full overflow-hidden">
                                <img src="{{ asset('images/photos/photo1.png') }}" class="w-full h-full object-cover"
                                    alt="photo">
                            </div>
                            <div class="flex flex-col justify-center-center">
                                <p
                                    class="font-semibold text-left leading-[170%] bg-clip-text text-transparent bg-gradient-to-r from-[#B05CB0] to-[#FCB16B]">
                                    Sarah Lopez</p>
                                <p class="font-semibold text-left text-xs text-belibang-grey">Brand Design Consultant
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="testimonial-card bg-[#181818] rounded-[20px] flex mr-5 w-[420px] min-h-[256px] shrink-0 overflow-hidden">
                    <div
                        class="p-6 flex flex-col w-full gap-[42px] shrink-0 bg-[url('{{ asset('images/backgrounds/Testimonials-image.png') }}')] bg-contain bg-no-repeat bg-top">
                        <div class="flex flex-col gap-4">
                            <div class="flex items-center ga-[6px]">
                                <img src="{{ asset('images/icons/star.svg') }}" alt="star">
                                <img src="{{ asset('images/icons/star.svg') }}" alt="star">
                                <img src="{{ asset('images/icons/star.svg') }}" alt="star">
                                <img src="{{ asset('images/icons/star.svg') }}" alt="star">
                                <img src="{{ asset('images/icons/star.svg') }}" alt="star">
                            </div>
                            <p class="leading-[26px]">Using these templates has boosted my productivity significantly.
                                Highly recommended for all designers!</p>
                        </div>
                        <div class="flex gap-[14px] items-center">
                            <div class="w-12 h-12 flex shrink-0 rounded-full overflow-hidden">
                                <img src="{{ asset('images/photos/photo2.png') }}" class="w-full h-full object-cover"
                                    alt="photo">
                            </div>
                            <div class="flex flex-col justify-center-center">
                                <p
                                    class="font-semibold text-left leading-[170%] bg-clip-text text-transparent bg-gradient-to-r from-[#B05CB0] to-[#FCB16B]">
                                    Michael Chen</p>
                                <p class="font-semibold text-left text-xs text-belibang-grey">UI/UX Designer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="testimonial-card bg-[#181818] rounded-[20px] flex mr-5 w-[420px] min-h-[256px] shrink-0 overflow-hidden">
                    <div
                        class="p-6 flex flex-col w-full gap-[42px] shrink-0 bg-[url('{{ asset('images/backgrounds/Testimonials-image.png') }}')] bg-contain bg-no-repeat bg-top">
                        <div class="flex flex-col gap-4">
                            <div class="flex items-center ga-[6px]">
                                <img src="{{ asset('images/icons/star.svg') }}" alt="star">
                                <img src="{{ asset('images/icons/star.svg') }}" alt="star">
                                <img src="{{ asset('images/icons/star.svg') }}" alt="star">
                                <img src="{{ asset('images/icons/star.svg') }}" alt="star">
                                <img src="{{ asset('images/icons/star.svg') }}" alt="star">
                            </div>
                            <p class="leading-[26px]">Using these templates has boosted my productivity significantly.
                                Highly recommended for all designers!</p>
                        </div>
                        <div class="flex gap-[14px] items-center">
                            <div class="w-12 h-12 flex shrink-0 rounded-full overflow-hidden">
                                <img src="{{ asset('images/photos/photo1.png') }}" class="w-full h-full object-cover"
                                    alt="photo">
                            </div>
                            <div class="flex flex-col justify-center-center">
                                <p
                                    class="font-semibold text-left leading-[170%] bg-clip-text text-transparent bg-gradient-to-r from-[#B05CB0] to-[#FCB16B]">
                                    Emily Robinson</p>
                                <p class="font-semibold text-left text-xs text-belibang-grey">Senior Graphic Designer
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="testimonial-card bg-[#181818] rounded-[20px] flex mr-5 w-[420px] min-h-[256px] shrink-0 overflow-hidden">
                    <div
                        class="p-6 flex flex-col w-full gap-[42px] shrink-0 bg-[url('{{ asset('images/backgrounds/Testimonials-image.png') }}')] bg-contain bg-no-repeat bg-top">
                        <div class="flex flex-col gap-4">
                            <div class="flex items-center ga-[6px]">
                                <img src="{{ asset('images/icons/star.svg') }}" alt="star">
                                <img src="{{ asset('images/icons/star.svg') }}" alt="star">
                                <img src="{{ asset('images/icons/star.svg') }}" alt="star">
                                <img src="{{ asset('images/icons/star.svg') }}" alt="star">
                                <img src="{{ asset('images/icons/star.svg') }}" alt="star">
                            </div>
                            <p class="leading-[26px]">Using these templates has boosted my productivity significantly.
                                Highly recommended for all designers!</p>
                        </div>
                        <div class="flex gap-[14px] items-center">
                            <div class="w-12 h-12 flex shrink-0 rounded-full overflow-hidden">
                                <img src="{{ asset('images/photos/photo1.png') }}" class="w-full h-full object-cover"
                                    alt="photo">
                            </div>
                            <div class="flex flex-col justify-center-center">
                                <p
                                    class="font-semibold text-left leading-[170%] bg-clip-text text-transparent bg-gradient-to-r from-[#B05CB0] to-[#FCB16B]">
                                    Sarah Lopez</p>
                                <p class="font-semibold text-left text-xs text-belibang-grey">Brand Design Consultant
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="Tool" class="mb-[102px] flex flex-col gap-8">
        <div class="container max-w-[1130px] mx-auto flex justify-between items-center">
            <h2 class="font-semibold text-[32px]">Browse Tools</h2>
        </div>
        <div class="tools-logos w-full overflow-hidden flex flex-col gap-5">
            <div class="group/slider flex flex-nowrap w-max items-center">
                <div
                    class="logo-container animate-[slide_50s_linear_infinite] group-hover/slider:pause-animate flex gap-5 pl-5 items-center flex-nowrap">
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('images/logos/blender.svg') }}" class="w-full h-full object-contain"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Blender</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">3D Ul Design</p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('images/logos/Excel.svg') }}" class="w-full h-full object-contain"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Excel</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Data Analysis</p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('images/logos/Kotlin.svg') }}" class="w-full h-full object-contain"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Kotlin</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Android Development
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('images/logos/Laravel.svg') }}" class="w-full h-full object-contain"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Laravel</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Back-End Development
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('images/logos/Vue.svg') }}" class="w-full h-full object-contain"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Vue</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Front-End
                                    Development
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('images/logos/figma-logo.svg') }}"
                                    class="w-full h-full object-contain" alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Figma</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Ul/UX Design</p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('images/logos/flutter.svg') }}" class="w-full h-full object-contain"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Flutter</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Mobile Development
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('images/logos/golang.svg') }}" class="w-full h-full object-contain"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Golang</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Back-End Development
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div
                    class="logo-container animate-[slide_50s_linear_infinite] group-hover/slider:pause-animate flex gap-5 pl-5 items-center flex-nowrap ">
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('images/logos/blender.svg') }}" class="w-full h-full object-contain"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Blender</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">3D Ul Design</p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('images/logos/Excel.svg') }}" class="w-full h-full object-contain"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Excel</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Data Analysis</p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('images/logos/Kotlin.svg') }}" class="w-full h-full object-contain"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Kotlin</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Android Development
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('images/logos/Laravel.svg') }}" class="w-full h-full object-contain"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Laravel</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Back-End Development
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('images/logos/Vue.svg') }}" class="w-full h-full object-contain"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Vue</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Front-End
                                    Development
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('images/logos/figma-logo.svg') }}"
                                    class="w-full h-full object-contain" alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Figma</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Ul/UX Design</p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('images/logos/flutter.svg') }}" class="w-full h-full object-contain"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Flutter</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Mobile Development
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('images/logos/golang.svg') }}" class="w-full h-full object-contain"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Golang</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Back-End Development
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="group/slider flex flex-nowrap w-max items-center">
                <div
                    class="logo-container animate-[slideToR_50s_linear_infinite] group-hover/slider:pause-animate flex gap-5 pl-5 items-center flex-nowrap">
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('images/logos/blender.svg') }}" class="w-full h-full object-contain"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Blender</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">3D Ul Design</p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('images/logos/Excel.svg') }}" class="w-full h-full object-contain"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Excel</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Data Analysis</p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('images/logos/Kotlin.svg') }}" class="w-full h-full object-contain"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Kotlin</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Android Development
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('images/logos/Laravel.svg') }}" class="w-full h-full object-contain"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Laravel</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Back-End Development
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('images/logos/Vue.svg') }}" class="w-full h-full object-contain"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Vue</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Front-End
                                    Development
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('images/logos/figma-logo.svg') }}"
                                    class="w-full h-full object-contain" alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Figma</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Ul/UX Design</p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('images/logos/flutter.svg') }}" class="w-full h-full object-contain"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Flutter</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Mobile Development
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('images/logos/golang.svg') }}" class="w-full h-full object-contain"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Golang</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Back-End Development
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div
                    class="logo-container animate-[slideToR_50s_linear_infinite] group-hover/slider:pause-animate flex gap-5 pl-5 items-center flex-nowrap ">
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('images/logos/blender.svg') }}" class="w-full h-full object-contain"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Blender</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">3D Ul Design</p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('images/logos/Excel.svg') }}" class="w-full h-full object-contain"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Excel</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Data Analysis</p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('images/logos/Kotlin.svg') }}" class="w-full h-full object-contain"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Kotlin</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Android Development
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('images/logos/Laravel.svg') }}" class="w-full h-full object-contain"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Laravel</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Back-End Development
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('images/logos/Vue.svg') }}" class="w-full h-full object-contain"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Vue</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Front-End
                                    Development
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('images/logos/figma-logo.svg') }}"
                                    class="w-full h-full object-contain" alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Figma</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Ul/UX Design</p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('images/logos/flutter.svg') }}" class="w-full h-full object-contain"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Flutter</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Mobile Development
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('images/logos/golang.svg') }}" class="w-full h-full object-contain"
                                    alt="logo">
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Golang</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">Back-End Development
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

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
