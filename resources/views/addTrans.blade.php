@include('main')
<script src="https://unpkg.com/flowbite@1.5.2/dist/datepicker.js"></script>

<!-- client side -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

<style>
    .div2 {
        margin: auto;
        width: 40%;
        margin-top: -470px;
        padding: 10px;
        background-color: #edf2f7;
        border-radius: 25px;
    }

    .labels {
        text-align: left;
        float: left;
        margin-left: 25px;
    }

    .labels2 {
        margin-left: 285px;
        margin-top: -69.99px;
    }

    .categMess {
        margin-left: -250px;
        margin-top: -16px;
    }

    .error {
        color: red;
    }
</style>

<script>
    var date = new Date();

    var day = date.getDate();
    var month = date.getMonth() + 1;
    var year = date.getFullYear();

    if (month < 10) month = "0" + month;
    if (day < 10) day = "0" + day;

    var today = year + "-" + month + "-" + day;
    document.getElementById("theDate").value = today;
</script>

<title>Add Transaction</title>

<div class="div2 h-auto w-2/5" style="text-align: center">
    <form action="{{route('transaction')}}" method="POST" id="trans" name="trans">
        @csrf
        <br>
        @foreach($usersDetails as $a)
        <p class="text-lg font-medium underline decoration-green-800 decoration-2 underline-offset-4 ">{{ $a->month }} for {{ $a->name }}</p>
        <br>
        <br>

        <div>
            <select id="category" name="category" class="labels rounded-xl shadow appearance-none border rounded w-56 h-12 py-3 px-5 text-gray-800 mt-0 leading-tight focus:outline-none focus:shadow-outline">
                <option value="" disabled selected>Select category</option>
                <option value="Food & Beverages">Food & Beverages</option>
                <option value="Transportation">Transportation</option>
                <option value="Rentals">Rentals</option>
                <option value="Bills">Bills</option>
                <option value="Education">Education</option>
                <option value="Others">Others</option>
            </select>

            <br>
            <br>
            <br>

            <div class="categMess text-sm text-red-700 dark:bg-red-200 dark:text-red-800" role="alert">
                <span class="font-medium">@error('category'){{$message}}@enderror</span>
            </div>


            <div class="mb-4 labels2 mt-2 w-56">
                <input class="rounded-xl shadow appearance-none border rounded w-full h-12 py-2 px-3 text-gray-800 leading-tight focus:outline-none focus:shadow-outline" id="amount" name="amount" type="text" placeholder="amount">
                <div class="text-sm text-red-700 dark:bg-red-200 dark:text-red-800" role="alert">
                    <span class="font-medium">@error('amount'){{$message}}@enderror</span>
                </div>
            </div>

        </div>

        <br>

        <div class="relative w-11/12 ml-6">
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                </svg>
            </div>
            <input disabled type="date" id="theDate" class="bg-slate-100 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 datepicker-input">
        </div>


        <br>
        <br>

        <div class="mb-4 w-11/12 ml-6">
            <input class="rounded-xl shadow appearance-none border rounded w-full py-2 px-3 text-gray-600 leading-tight focus:outline-none focus:shadow-outline italic " id="notes" name="notes" type="text" placeholder="notes (optional)">
            <span class="text-danger">@error('notes'){{$message}}@enderror</span>
        </div>

        <button type="submit" class="mt-4 ml-96 text-emerald-400 hover:text-white border border-emerald-400 hover:bg-emerald-400 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">Save</button>

        @endforeach

        @if(Session::has('msg'))
        <div style="margin-top: -50px;  margin-left: 60px; " class="w-7/12 h-11 p-2 text-base text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
            {{Session::get('msg')}}
        </div>
        @endif

    </form>
</div>

<script>
    if ($("#trans").length > 0) {
        $("#trans").validate({
            rules: {
                amount: {
                    required: true,
                    digits: true,
                },
            },
            messages: {
                amount: {
                    required: "Please enter amount spent.",
                    digits: "Amount must be a number.",
                },
            },
        })
    }
</script>