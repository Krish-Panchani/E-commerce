<?php require_once 'header.php'; ?>
</body>
<div class="form">
            <div class="min-h-screen flex items-center justify-center">
                <div class="max-w-md w-full p-6 bg-white rounded-lg shadow-lg">
                    <div class="flex justify-center mb-8">
                        <a href="#"
                                class="flex items-center mb-4 sm:mb-0">
                                <span
                                    class="self-center text-2xl font-semibold whitespace-nowrap">Locommerce</span>
                            </a>
                    </div>
                    <h1
                        class="text-2xl font-semibold text-center text-gray-500 mt-8 mb-6">Register</h1>
                    <form>
                        <div class="flex">
                        <div class="mb-4 mr-4">
                            <label for="nombre"
                                class="block mb-2 text-sm text-gray-600">First
                                Name</label>
                            <input type="text" id="Fname" name="Fname"
                                class="w-full px-4 py-2 border border-cyan-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500"
                                required />
                        </div>
                        <div class="mb-4">
                            <label for="apellido"
                                class="block mb-2 text-sm text-gray-600">Last
                                Name</label>
                            <input type="text" id="Lname" name="Lname"
                                class="w-full px-4 py-2 border border-cyan-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500"
                                required />
                        </div>
                    </div>
                        <div class="mb-4">
                            <label for="phone"
                                class="block mb-2 text-sm text-gray-600">Phone
                                Number</label>
                            <input type="phone" id="phone" name="phone"
                                class="w-full px-4 py-2 border border-cyan-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500"
                                required />
                        </div>
                        <div class="mb-4">
                            <label for="email"
                                class="block mb-2 text-sm text-gray-600">Email
                                Address</label>
                            <input type="email" id="email" name="email"
                                class="w-full px-4 py-2 border border-cyan-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500"
                                required />
                        </div>
                        <div class="mb-4">
                            <label for="password"
                                class="block mb-2 text-sm text-gray-600">Password</label>
                            <input type="password" id="password" name="password"
                                class="w-full px-4 py-2 border border-cyan-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500"
                                required />
                        </div>
                        <div class="mb-6">
                            <label for="confirmPassword"
                                class="block mb-2 text-sm text-gray-600">Confirm
                                Password</label>
                            <input type="password" id="confirmPassword"
                                name="confirmPassword"
                                class="w-full px-4 py-2 border border-cyan-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500"
                                required />
                        </div>
                        <button type="submit"
                            class="w-32 bg-gradient-to-r from-cyan-400 to-cyan-600 text-white py-2 rounded-lg mx-auto block focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mb-2">Register</button>
                    </form>
                    <div class="text-center">
                        <p class="text-sm">Already have an account? <a href="Login.html"
                                class="text-cyan-600">Log In</a></p>
                    </div>
                </div>
            </div>

            <div class="footer">
                <footer class="bg-white rounded-lg shadow m-4">
                    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
                        <div class="sm:flex sm:items-center sm:justify-between">
                            <a href="https://flowbite.com/"
                                class="flex items-center mb-4 sm:mb-0">
                                <span
                                    class="self-center text-2xl font-semibold whitespace-nowrap">Locommerce</span>
                            </a>
                            <ul
                                class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0">
                                <li>
                                    <a href="#"
                                        class="mr-4 hover:underline md:mr-6 ">About</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="mr-4 hover:underline md:mr-6">Privacy
                                        Policy</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="mr-4 hover:underline md:mr-6 ">Licensing</a>
                                </li>
                                <li>
                                    <a href="#" class="hover:underline">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <hr
                            class="my-6 border-gray-200 sm:mx-auto lg:my-8" />
                        <span
                            class="block text-sm text-gray-500 sm:text-center">©
                            2023 <a href="#"
                                class="hover:underline">Locommerce™</a>. All
                            Rights Reserved.</span>
                    </div>
                </footer>

            </div>

            <!-- <div class="container bottomNavigationBar">
                <div
                    class="fixed z-50 w-full h-16 max-w-lg -translate-x-1/2 bg-white border border-gray-200 rounded-full bottom-4 left-1/2">
                    <div class="grid h-full max-w-lg grid-cols-5 mx-auto">
                        <button data-tooltip-target="tooltip-home" type="button"
                            class="inline-flex flex-col items-center justify-center px-5 rounded-l-full hover:bg-gray-50 group">
                            <svg
                                class="w-5 h-5 mb-1 text-gray-500 group-hover:text-blue-600"
                                aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                            </svg>
                            <span class="sr-only">Home</span>
                        </button>
                        <div id="tooltip-home" role="tooltip"
                            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                            Home
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                        <button data-tooltip-target="tooltip-wallet"
                            type="button"
                            class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 group">
                            <svg
                                class="w-5 h-5 mb-1 text-gray-500  group-hover:text-blue-600"
                                aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M11.074 4 8.442.408A.95.95 0 0 0 7.014.254L2.926 4h8.148ZM9 13v-1a4 4 0 0 1 4-4h6V6a1 1 0 0 0-1-1H1a1 1 0 0 0-1 1v13a1 1 0 0 0 1 1h17a1 1 0 0 0 1-1v-2h-6a4 4 0 0 1-4-4Z" />
                                <path
                                    d="M19 10h-6a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1Zm-4.5 3.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM12.62 4h2.78L12.539.41a1.086 1.086 0 1 0-1.7 1.352L12.62 4Z" />
                            </svg>
                            <span class="sr-only">Wallet</span>
                        </button>
                        <div id="tooltip-wallet" role="tooltip"
                            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                            Wallet
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                        <div class="flex items-center justify-center">
                            <button data-tooltip-target="tooltip-new"
                                type="button"
                                class="inline-flex items-center justify-center w-10 h-10 font-medium bg-blue-600 rounded-full hover:bg-blue-700 group focus:ring-4 focus:ring-blue-300 focus:outline-none">
                                <svg class="w-4 h-4 text-white"
                                    aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 18 18">
                                    <path stroke="currentColor"
                                        stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2"
                                        d="M9 1v16M1 9h16" />
                                </svg>
                                <span class="sr-only">New item</span>
                            </button>
                        </div>
                        <div id="tooltip-new" role="tooltip"
                            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                            Create new item
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                        <button data-tooltip-target="tooltip-settings"
                            type="button"
                            class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 group">
                            <svg
                                class="w-5 h-5 mb-1 text-gray-500 group-hover:text-blue-600"
                                aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 20 20">
                                <path stroke="currentColor"
                                    stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2"
                                    d="M4 12.25V1m0 11.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M4 19v-2.25m6-13.5V1m0 2.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M10 19V7.75m6 4.5V1m0 11.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5ZM16 19v-2" />
                            </svg>
                            <span class="sr-only">Settings</span>
                        </button>
                        <div id="tooltip-settings" role="tooltip"
                            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                            Settings
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                        <button data-tooltip-target="tooltip-profile"
                            type="button"
                            class="inline-flex flex-col items-center justify-center px-5 rounded-r-full hover:bg-gray-50 group">
                            <svg
                                class="w-5 h-5 mb-1 text-gray-500 group-hover:text-blue-600"
                                aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                            </svg>
                            <span class="sr-only">Profile</span>
                        </button>
                        <div id="tooltip-profile" role="tooltip"
                            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                            Profile
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </div>
                </div>
            </div> -->

</html>