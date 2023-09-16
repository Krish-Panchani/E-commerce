<?php require_once 'header.php'; ?>
<?php require_once '_navbar.php'; ?>


<div class="form">
            <div
                class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
                <div class="container max-w-screen-lg mx-auto">
                    <div>
                        <h2 class="font-semibold text-xl text-gray-600">Item
                            Decsription</h2>
                        <p class="text-gray-500 mb-6">give brief description
                            about your product</p>

                        <div
                            class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                            <div
                                class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                                <div class="text-gray-600">
                                    <p class="font-medium text-lg">Choose Image</p>
                                    
<div class="flex items-center justify-center w-full">
    <label for="dropzone-file" class="flex flex-col items-center mt-10 justify-center h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800  hover:bg-gray-100  ">
        <div class="flex flex-col items-center justify-center pt-5 pb-6">
            <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
            </svg>
            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
        </div>
        <input id="dropzone-file" type="file" class="hidden" />
    </label>
</div> 

                                </div>

                                <div class="lg:col-span-2">
                                    <div
                                        class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                        <div class="md:col-span-5">
                                            <label for="full_name">Product Name</label>
                                            <input type="text" name="full_name"
                                                id="full_name"
                                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                                value />
                                        </div>

                                        <div class="md:col-span-5">

                                            <label for="countries"
                                                class="block mb-2 text-sm  text-gray-900">Choose Category</label>
                                            <select id="countries"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder-black-400">
                                                <option selected>Choose a Category</option>
                                                <option value="US">Fashion</option>
                                                <option value="CA">Grocery</option>
                                                <option value="FR">Pharmacy</option>
                                                <option value="DE">Electronics</option>
                                            </select>

                                        </div>

                                        <div class="md:col-span-3">
                                            <label for="address">Decsription</label>
                                            <input type="text" name="address"
                                                id="address"
                                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                                value placeholder />
                                        </div>

                                        <div class="md:col-span-2">
                                            <label for="soda">How Many Items?</label>
                                            <div
                                                class="h-10 w-28 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                                <button tabindex="-1"
                                                    for="show_more"
                                                    class="cursor-pointer outline-none focus:outline-none border-r border-gray-200 transition-all text-gray-500 hover:text-blue-600">
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="h-4 w-4 mx-2"
                                                        viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path
                                                            fill-rule="evenodd"
                                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                                <input name="soda" id="soda"
                                                    placeholder="0"
                                                    class="px-2 text-center appearance-none outline-none text-gray-800 w-full bg-transparent"
                                                    value="0" />
                                                <button tabindex="-1"
                                                    for="show_more"
                                                    class="cursor-pointer outline-none focus:outline-none border-l border-gray-200 transition-all text-gray-500 hover:text-blue-600">
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="h-4 w-4 mx-2 fill-current"
                                                        viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path
                                                            fill-rule="evenodd"
                                                            d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>



                                        <div class="md:col-span-3">
                                            <label for="address">Brand Name</label>
                                            <input type="text" name="address"
                                                id="address"
                                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                                value placeholder />
                                        </div>


                                        <div class="md:col-span-3">
                                            <label for="address">Standard Price</label>
                                            <input type="text" name="address"
                                                id="address"
                                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                                value placeholder />
                                        </div>

                                        <div class="md:col-span-5 text-right">
                                            <div class="inline-flex items-end">
                                                <a href="items.php">
                                                <button
                                                    class="bg-cyan-400 hover:bg-cyan-700 text-white font-bold py-2 px-4 rounded">Add</button>
                                                    </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php require_once '../components/_footer.php'; ?>
</body>
</html>