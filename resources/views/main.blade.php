<script src="https://cdn.tailwindcss.com"></script>
<style>
    .center {
        background-color: #009933
    }
</style>
<nav class="h-16 bg-white border-gray-200 px-2 sm:px-4 py-1.5 rounded dark:bg-gray-900" style="background-color: #009933">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="#" class="flex items-center">
            <img src="https://img.icons8.com/doodle/344/coins--v1.png" width="40" height="40" style="vertical-align:middle;">
            &nbsp; &nbsp;
            <p class="text-2xl font-serif" style="text-align: center; color: white;">Bugdet Manager</p>
        </a>

        <div class="center hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class=" text-white flex flex-col p-4 mt-4  rounded-lg  md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0" style="background-color: #009933">
                <li>
                    <a href="#" class="block py-2 pr-4 pl-3  rounded md:bg-transparent md:text-white md:hover:text-black md:p-0 dark:text-white" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="#" class="block py-2 pr-4 pl-3  rounded hover:bg-black md:hover:bg-transparent md:border-0 md:hover:text-black md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
                </li>
                <li>
                    <a href="#" class="block py-2 pr-4 pl-3  rounded hover:bg-black md:hover:bg-transparent md:border-0 md:hover:text-black md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
                </li>
                <li>
                    <a href="#" class="block py-2 pr-4 pl-3  rounded hover:bg-black md:hover:bg-transparent md:border-0 md:hover:text-black md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
                </li>
                <li>
                    <a href="logout" class="block py-2 pr-4 pl-3  rounded hover:bg-black md:hover:bg-transparent md:border-0 md:hover:text-black md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Log out</a>
                </li>

            </ul>
        </div>
    </div>
</nav>