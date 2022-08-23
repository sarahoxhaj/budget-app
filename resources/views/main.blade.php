<script src="https://cdn.tailwindcss.com"></script>
<style>
    .center {
        background-color: #009933
    }
</style>
<nav class="h-16 bg-white border-gray-200 px-2 sm:px-4 py-1.5 rounded dark:bg-gray-900" style="background-color: #009933">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="getData" class="flex items-center">
            <img src="https://img.icons8.com/doodle/344/coins--v1.png" width="40" height="40" style="vertical-align:middle;">
            &nbsp; &nbsp;
            <p class="text-2xl font-serif" style="color: white;">Bugdet Manager</p>
        </a>

        <div class="center hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class=" text-white flex flex-col p-4 mt-4  rounded-lg  md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0" style="background-color: #009933">
                <li>
                    <span id='date-time'></span>
                </li>
                <li>
                    <a href="{{route('transView')}}" id="test" class="block py-2 pr-4 pl-3  rounded md:bg-transparent md:text-white md:hover:text-black md:p-0 dark:text-white" aria-current="page">Add Transaction</a>
                </li>
                <li>
                    <a href="logout" class="block py-2 pr-4 pl-3  rounded hover:bg-black md:hover:bg-transparent md:border-0 md:hover:text-black md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Sign out</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<aside class="w-64" aria-label="Sidebar">
    <div class="overflow-y-auto py-44 pt-4 px-5   rounded dark:bg-gray-800">
        <ul class="space-y-2">
            @csrf
            <li>
                <a href="{{route('getData')}}" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <img width="35" height="35" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iNzUycHQiIGhlaWdodD0iNzUycHQiIHZlcnNpb249IjEuMSIgdmlld0JveD0iMCAwIDc1MiA3NTIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CiA8Zz4KICA8cGF0aCBkPSJtNTc0LjMxIDM2NC4xNnYtODguNzk3YzAtNS45MTgtMy45NDUzLTkuODY3Mi05Ljg2NzItOS44NjcyaC0yNC42NjR2LTUzLjI3M2MwLTUuOTE4LTMuOTQ1My05Ljg2NzItOS44NjcyLTkuODY3Mi0zLjk0NTMgMC0xMTYuNDItMC45ODgyOC0xMTkuMzggMC45ODgyOGwtNDQuMzk1LTQzLjQxNGMtMy45NDUzLTMuOTQ1My05Ljg2NzItMy45NDUzLTEzLjgxMiAwbC00My40MSA0My40MWMtMy45NDkyLTAuOTg0MzgtMTA2LjU2LTAuOTg0MzgtMTEwLjUtMC45ODQzOC0yOS41OTggMC01NC4yNjYgMjQuNjY0LTU0LjI2NiA1NC4yNjZ2MjkxLjA1YzAgMjYuNjQxIDIxLjcwNyA0Ny4zNTkgNDcuMzU5IDQ3LjM1OWgzNzIuOTVjNS45MTggMCA5Ljg2NzItMy45NDUzIDkuODY3Mi05Ljg2NzJ2LTg4Ljc5N2MxOC43NDYtMS45NzI3IDMzLjU0Ny0xOC43NDYgMzMuNTQ3LTM3LjQ5MnYtNTcuMjIzYy0wLjAwMzkwNi0xOS43MzQtMTQuODA1LTM1LjUyLTMzLjU1MS0zNy40OTZ6bS01NC4yNjItMTQyLjA3djQzLjQxaC00Ny4zNTlsLTQzLjQxLTQzLjQxem0tMTYwLjgyLTQxLjQzOCA4NC44NTIgODQuODUyaC0xNjkuN3ptLTE2MC44MiA0MS40MzhoOTEuNzU4bC00My40MSA0My40MS01NS4yNTQgMC4wMDM5MDZjLTEwLjg1MiAwLTE5LjczNCAyLjk2MDktMjcuNjI1IDguODc4OXYtMTcuNzU4Yy0wLjAwMzkwNi0xOC43NDYgMTUuNzg1LTM0LjUzNSAzNC41MzEtMzQuNTM1em0tNi45MDYyIDM1My4yMWMtMTUuNzg1IDAtMjcuNjI1LTEyLjgyNC0yNy42MjUtMjcuNjI1di0yMzQuODJjMC0xNC44MDEgMTIuODI0LTI2LjY0MSAyNy42MjUtMjYuNjQxaDM2My4wOHY3Ny45NDVsLTg5Ljc4NS0wLjAwMzkwNmMtMjAuNzE5IDAtMzguNDc3IDE2Ljc3My0zOC40NzcgMzguNDc3djU3LjIyM2MwIDIwLjcxOSAxNi43NzMgMzguNDc3IDM4LjQ3NyAzOC40NzdoODkuNzgxdjc3Ljk0NWwtMzYzLjA3IDAuMDAzOTA2em0zOTYuNjItMTE2LjQyYzAgOS44NjcyLTcuODk0NSAxOC43NDYtMTguNzQ2IDE4Ljc0NmgtMTA0LjU4Yy05Ljg2NzIgMC0xOC43NDYtNy44OTQ1LTE4Ljc0Ni0xOC43NDZ2LTU3LjIyM2MwLTkuODY3MiA3Ljg5NDUtMTguNzQ2IDE4Ljc0Ni0xOC43NDZoMTA0LjU4YzkuODY3MiAwIDE4Ljc0NiA3Ljg5NDUgMTguNzQ2IDE4Ljc0NnoiLz4KICA8cGF0aCBkPSJtNDgyLjU2IDQyMS4zOWMtNi45MDYyLTIuOTYwOS0xMy44MTIgMS45NzI3LTEzLjgxMiA4Ljg3ODkgMCA0LjkzMzYgMy45NDUzIDkuODY3MiA5Ljg2NzIgOS44NjcyIDUuOTE4IDAgOS44NjcyLTQuOTMzNiA5Ljg2NzItOS44NjcyLTAuMDAzOTA3LTMuOTQ1My0yLjk2NDgtNy44OTQ1LTUuOTIxOS04Ljg3ODl6Ii8+CiA8L2c+Cjwvc3ZnPgo=">
                    <span class="ml-3">Budget</span>
                </a>
            </li>
            <li>
                <a href="{{route('statistics')}}" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <img width="25" height="25" src="https://img.icons8.com/pastel-glyph/344/analytics.png">
                    <span class="flex-1 ml-3 whitespace-nowrap"> &nbsp; Statistics</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path>
                        <path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path>
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Inbox</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Users</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Products</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Sign In</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Sign Up</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
<script>
    var today = new Date();
    var year = today.getFullYear();
    var mes = today.getMonth() + 1;
    var dia = today.getDate();
    var fecha = dia + "/" + mes + "/" + year;
    document.getElementById('date-time').innerHTML = fecha;
</script>