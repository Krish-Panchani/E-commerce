<?php require_once 'header.php'; ?>
<?php require_once 'components/_navbar.php'; ?>


<div class="px-4 py-4 flex justify-center items-center">
    <span class="rounded-full border bg-cyan-500 px-2 font-semibold text-white">Catagories</span>
</div>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
<?php require_once 'components/_footer.php'; ?>
</body>

</html>