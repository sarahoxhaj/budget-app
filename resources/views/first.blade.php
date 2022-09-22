<script src="https://cdn.tailwindcss.com"></script>

<!-- client side -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

<style>
    .center {
        background-color: #009933
    }

    .div1 {
        border-radius: 25px;
        margin: auto;
        margin-top: 100px;
        background-color: #edf2f7;
    }

    .error {
        color: red;
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
                    <a href="#" class="block py-2 pr-4 pl-3  rounded md:bg-transparent md:text-white md:hover:text-black md:p-0 dark:text-white" aria-current="page">Add Transaction</a>
                </li>
                <li>
                    <a href="logout" class="block py-2 pr-4 pl-3  rounded hover:bg-black md:hover:bg-transparent md:border-0 md:hover:text-black md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Sign out</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<div class="div1 p-6 h-3/5 w-2/5" style="text-align: center">
    <form action="{{route('datas')}}" method="POST" id="wallet" name="wallet">
        @csrf
        <p class="text-xl font-medium">Add a wallet first!</p>
        <input class="rounded-xl shadow appearance-none border rounded w-full py-3 px-5 text-gray-700 mt-6 leading-tight focus:outline-none focus:shadow-outline" id="wallet" name="wallet" type="text" placeholder="wallet name">

        <select id="currency" name="currency" class="rounded-xl shadow appearance-none border rounded w-full py-3 px-5 text-gray-800 mt-6 leading-tight focus:outline-none focus:shadow-outline">
            <option value="" disabled selected>Click to choose a currency</option>
            <option value="€">Euro</option>
            <option value="$">USD</option>
            <option value="ALL">ALL</option>
            <option value="£">Pound</option>
        </select>

        <input class="rounded-xl shadow appearance-none border rounded w-full py-3 px-5 text-gray-700 mt-6 leading-tight focus:outline-none focus:shadow-outline" id="balace" name="balace" type="text" placeholder="initial balace">
        <button type="submit" class="mt-14 ml-96 text-emerald-400 hover:text-white border border-emerald-400 hover:bg-emerald-400 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">Save</button>
    </form>
</div>

<script>
    if ($("#wallet").length > 0) {
        $("#wallet").validate({
            rules: {
                wallet: {
                    required: true,
                },
                balace: {
                    required: true,
                    digits: true,
                },
            },
            messages: {
                wallet: {
                    required: "Please type a wallet name.",
                },
                balace: {
                    required: "Please enter a initial balance.",
                    digits: "Initial balance must be a number."
                },
            },
        })
    }
</script>