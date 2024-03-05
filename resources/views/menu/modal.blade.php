<div class="fixed z-50 h-screen w-full flex items-center justify-center hidden" id="menu-modal" tabindex="-1" aria-labelledby="modal-label" aria-modal="true" role="dialog">

    <div class="border border-primary rounded-lg w-3/4 md:w-1/2 lg:w-1/4 p-5 bg-white">
        <form action="menu" method="POST" class="flex flex-col gap-3" enctype="multipart/form-data">
            @csrf
            <div id="method"></div>
            <input type="hidden" name="old_image" id="old_image" />
            <div class="flex justify-between">
                <p class="text-lg font-bold text-primary modal-title">Add Menu</p>
                <button type="button" id="modal-close">
                    <span class="text-primary font-bold" aria-hidden="true">&times;</span>
                </button>
            </div>

            <div>
                <label for="name" class="w-full font-semibold text-primary"> Name </label>
                <input type="text" class="w-full text-gray-800 rounded-lg outline-0 py-1 px-2 mt-2 ring-1 ring-secondary focus:ring-2 focus:ring-secondary" name="name" id="name" placeholder="Cumi Krispy" />
            </div>

            <div class="flex gap-2">
                <div class="w-1/2">
                    <label for="price" class="w-full font-semibold text-primary"> Price </label>
                    <input type="text" class="w-full text-gray-800 rounded-lg outline-0 py-1 px-2 mt-2 ring-1 ring-secondary focus:ring-2 focus:ring-secondary" name="price" id="price" placeholder="15.000" />
                </div>
                <div class="w-1/2">
                    <label for="type" class="w-full font-semibold text-primary"> Type </label>
                    <select class="w-full block text-gray-800 rounded-lg outline-0 py-1 px-2 mt-2 ring-1 ring-secondary focus:ring-2 focus:ring-secondary focus:outline-none focus:shadow-outline" type="type" name="type" id="type">
                        <option>Coffee</option>
                        <option>Beverages</option>
                        <option>Dessert</option>
                    </select>
                </div>
            </div>

            <div>
                <label for="image" class="w-full font-semibold text-primary"> Image </label>
                <input type="file" class="w-full text-gray-800 rounded-lg outline-0 py-1 px-2 mt-2 ring-1 ring-secondary focus:ring-2 focus:ring-secondary" name="image" id="image" placeholder="Image" onchange="previewImage()" />
            </div>

            <div class="w-full">
                <img src="" class="hidden img-preview rounded-lg outline-0 py-1 px-2 mt-2 border border-secondary" alt="" style="max-height: 150px" />
            </div>

            <div class="flex flex-row justify-end">
                <button type="submit" class="submit py-1 bg-secondary rounded-full px-3 text-sm text-white focus:ring-1 focus:ring-offset-1 focus:ring-tertiary hover:bg-tertiary">
                    Add
                </button>
            </div>
        </form>
    </div>
</div>