<?php require_once 'header.php'; ?>


<?php require_once 'components/_navbar.php'; ?>
<!-- <div class="flex flex-wrap gap-2 lg:gap-4 mt-6 items-center justify-center"> -->

<div class="flex flex-col items-center justify-center">
<div class="px-4 py-4">
    <span class="rounded-full border bg-cyan-500 px-2 font-semibold text-white">All Categories</span>
</div>
<div class="flex">
    <a href="electronics.php" class="px-2">
        <div class="mb-6 flex flex-col items-center justify-center px-2 py-2">
            <img src="images/electronics.jpg" class="w-28 h-28 object-cover object-top rounded-full shadow-lg dark:shadow-black/30" />
            <span class="py-2 text-xl font-semibold text-cyan-500">Electronics</span>
        </div>
    </a>
    <a href="fashion.php" class="px-2">
        <div class="mb-6 flex flex-col items-center justify-center px-2 py-2">
            <img src="images/fashion.jpg" class="w-28 h-28 object-cover object-top rounded-full shadow-lg dark:shadow-black/30" />
            <span class="py-2 text-xl font-semibold text-cyan-500">Fashion</span>
        </div>
    </a>
    <a href="grocery.php" class="px-2">
        <div class="mb-6 flex flex-col items-center justify-center px-2 py-2">
            <img src="images/grocery.jpg" class="w-28 h-28 object-cover object-top rounded-full shadow-lg dark:shadow-black/30" />
            <span class="py-2 text-xl font-semibold text-cyan-500">Grocery</span>
        </div>
    </a>
    <a href="pharmacy.php" class="px-2">
        <div class="mb-6 flex flex-col items-center justify-center px-2 py-2">
            <img src="images/pharmacy.png" class="w-28 h-28 object-cover object-top rounded-full shadow-lg dark:shadow-black/30" />
            <span class="py-2 text-xl font-semibold text-cyan-500">pharmacy</span>
        </div>
    </a>
</div>
</div>

<div class="text-cyan-500 px-8">
    <h1 class="font-bold text-xl">Featured Products</h1>
</div>
<div class="grid grid-cols-2 gap-2 sm:grid-cols-4 mt-6 items-center justify-items-center justify-center border-2 rounded-xl mx-4 my-2 py-2 border-gray-800">
    <div class="card flex flex-col md:w-64 w-48 px-4 py-2 bg-white hover:shadow-xl transition ease-in duration-150">
        <img src="img/blezer.jpg" class="md:w-56 w-36 h-48 object-cover object-top" alt="">
        <h2 class="px-2 mt-2 text-left truncate">Blazzer
        </h2>
        <div class="flex justify-between mt-2">
            <h2 class="font-semibold">₹600</h2>
            <h3 class="font-semibold text-green-600 text-xs text-center">20% OFF</h2>
                <h2 class="line-through">₹800</h2>
        </div>
        <h2 class="font-semibold text-cyan-400 border border-cyan-500 rounded-lg px-2 my-2 text-center">
            <i class="fa fa-add"></i>
            <span class="text-cyan-400">Add to Cart</span>
        </h2>

    </div>
    <div class="card flex flex-col md:w-64 w-44 px-4 py-2 bg-white hover:shadow-xl transition ease-in duration-150">
        <img src="img/4.jpeg" class="md:w-56 w-36 h-48 object-cover object-top" alt="">
        <h2 class="px-2 mt-2 text-left truncate ">Formal shoes
        </h2>
        <div class="flex justify-between mt-2">
            <h2 class="font-semibold">₹600</h2>
            <h3 class="font-semibold text-green-600 text-xs text-center">20% OFF</h2>
                <h2 class="line-through">₹800</h2>
        </div>
        <h2 class="font-semibold text-cyan-400 border border-cyan-500 rounded-lg px-2 my-2 text-center">
            <i class="fa fa-add"></i>
            <span class="text-cyan-400">Add to Cart</span>
        </h2>



    </div>
    <div class="card flex flex-col md:w-64 w-44 px-4 py-2 bg-white hover:shadow-xl transition ease-in duration-150">
        <img src="img/4 (1).jpg" class="md:w-56 w-36 h-48 object-cover object-top" alt="">
        <h2 class="px-2 mt-2 text-left truncate ">AirPods
        </h2>
        <div class="flex justify-between mt-2">
            <h2 class="font-semibold">₹600</h2>
            <h3 class="font-semibold text-green-600 text-xs text-center">20% OFF</h2>
                <h2 class="line-through">₹800</h2>
        </div>
        <h2 class="font-semibold text-cyan-400 border border-cyan-500 rounded-lg px-2 my-2 text-center">
            <i class="fa fa-add"></i>
            <span class="text-cyan-400">Add to Cart</span>
        </h2>

    </div>
    <div class="card flex flex-col md:w-64 w-44 px-4 py-2 bg-white hover:shadow-xl transition ease-in duration-150">
        <img src="img/11.jpeg" class="md:w-56 w-36 h-48 object-cover object-top" alt="">
        <h2 class="px-2 mt-2 text-left truncate ">Brushes
        </h2>
        <div class="flex justify-between mt-2">
            <h2 class="font-semibold">₹600</h2>
            <h3 class="font-semibold text-green-600 text-xs text-center">20% OFF</h2>
                <h2 class="line-through">₹800</h2>
        </div>
        <h2 class="font-semibold text-cyan-400 border border-cyan-500 rounded-lg px-2 my-2 text-center">
            <i class="fa fa-add"></i>
            <span class="text-cyan-400">Add to Cart</span>
        </h2>
    </div>
    <div class="card flex flex-col md:w-64 w-44 px-4 py-2 bg-white hover:shadow-xl transition ease-in duration-150">
        <img src="img/veg.jpg" class="md:w-56 w-36 h-48 object-cover object-top" alt="">
        <h2 class="px-2 mt-2 text-left truncate ">Vegetables
        </h2>
        <div class="flex justify-between mt-2">
            <h2 class="font-semibold">₹600</h2>
            <h3 class="font-semibold text-green-600 text-xs text-center">20% OFF</h2>
                <h2 class="line-through">₹800</h2>
        </div>
        <h2 class="font-semibold text-cyan-400 border border-cyan-500 rounded-lg px-2 my-2 text-center">
            <i class="fa fa-add"></i>
            <span class="text-cyan-400">Add to Cart</span>
        </h2>
    </div>
    <div class="card flex flex-col md:w-64 w-44 px-4 py-2 bg-white hover:shadow-xl transition ease-in duration-150">
        <img src="img/pexels-karolina-grabowska-4022090.jpg" class="md:w-56 w-36 h-48 object-cover object-top" alt="">
        <h2 class="px-2 mt-2 text-left truncate ">Black Berry
        </h2>
        <div class="flex justify-between mt-2">
            <h2 class="font-semibold">₹600</h2>
            <h3 class="font-semibold text-green-600 text-xs text-center">20% OFF</h2>
                <h2 class="line-through">₹800</h2>
        </div>
        <h2 class="font-semibold text-cyan-400 border border-cyan-500 rounded-lg px-2 my-2 text-center">
            <i class="fa fa-add"></i>
            <span class="text-cyan-400">Add to Cart</span>
        </h2>
    </div>
    <div class="card flex flex-col md:w-64 w-44 px-4 py-2 bg-white hover:shadow-xl transition ease-in duration-150">
        <img src="img/15.webp" class="md:w-56 w-36 h-48 object-cover object-top" alt="">
        <h2 class="px-2 mt-2 text-left truncate ">Make Up Fixer
        </h2>
        <div class="flex justify-between mt-2">
            <h2 class="font-semibold">₹600</h2>
            <h3 class="font-semibold text-green-600 text-xs text-center">20% OFF</h2>
                <h2 class="line-through">₹800</h2>
        </div>
        <h2 class="font-semibold text-cyan-400 border border-cyan-500 rounded-lg px-2 my-2 text-center">
            <i class="fa fa-add"></i>
            <span class="text-cyan-400">Add to Cart</span>
        </h2>
    </div>
    <div class="card flex flex-col md:w-64 w-44 px-4 py-2 bg-white hover:shadow-xl transition ease-in duration-150">
        <img src="img/6.webp" class="md:w-56 w-36 h-48 object-cover object-top" alt="">
        <h2 class="px-2 mt-2 text-left truncate ">Microwave Owen
        </h2>
        <div class="flex justify-between mt-2">
            <h2 class="font-semibold">₹600</h2>
            <h3 class="font-semibold text-green-600 text-xs text-center">20% OFF</h2>
                <h2 class="line-through">₹800</h2>
        </div>
        <h2 class="font-semibold text-cyan-400 border border-cyan-500 rounded-lg px-2 my-2 text-center">
            <i class="fa fa-add"></i>
            <span class="text-cyan-400">Add to Cart</span>
        </h2>
    </div>
</div>

<?php include_once 'components/_footer.php'; ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
<?php require_once 'components/_footer.php'; ?>
</body>

</html>