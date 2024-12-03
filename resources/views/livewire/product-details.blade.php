<div>
    <div class="flex gap-5 p-20">
        <img src="https://images.unsplash.com/photo-1709884735626-63e92727d8b6?q=80&w=2128&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            height="400px" width="400px" alt="product-image" class="rounded-lg object-contain">
        <div>
            <h2 class="p-1 font-medium text-2xl line-clamp-2">Product Title</h2>
            <h2 class="p-1 text-gray-500 line-clamp-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae
                assumenda, possimus culpa dolores vitae magni odit totam doloribus cumque alias deleniti eaque minus
                voluptatibus necessitatibus aliquid delectus atque natus error.</h2>
            <div class="flex gap-10">
                <div class="bg-green-300 p-1 rounded-md">
                    <h2 class="text-2xl">Outfit</h2>
                </div>
                <h2 class="text-2xl font-medium">$2.99</h2>
            </div>
            <div class="my-3">
                <a class="text-center flex justify-center gap-2 bg-blue-600 w-full rounded px-10 py-2 text-sm font-medium text-white shadow hover:bg-blue-800 focus:outline-none focus:ring active:bg-blue-500 sm:w-auto"
                    href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                    </svg>
                    <span>
                        Add To Cart</span>
                </a>
            </div>

        </div>

    </div>

    {{-- RELATED PRODUCT --}}
    <div class="my-5 px-20 pt-5">
        <h2 class="text-2xl font-medium">Related Product</h2>
        <livewire:product-listing />
    </div>
</div>
