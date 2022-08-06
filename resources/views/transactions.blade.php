@include('main')
<style>
    .div2 {
        margin: auto;
        width: 40%;
        margin-top: -470px;
        padding: 10px;
        background-color: #edf2f7;
        border-radius: 25px;
    }
</style>
<div class="div2 h-3/5 w-2/5" style="text-align: center">
    <form action="{{route('datas')}}" method="POST">
        @csrf
        <br>
        <br>
        <p class="text-lg font-medium underline decoration-green-800 decoration-2 underline-offset-4">This Month</p>
        <br>
        <br>

        <span align="left">Inflow</span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <span align="right" class="text-blue-500">+ {{ $currency }} {{ $balance }}</span>
        <br>
        <br>
        <span align="left">Outflow</span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <span align="right" class="text-red-500">{{ $currency }} 0</span>
        <br>




        <button type="submit" class="mt-14 ml-96 text-emerald-400 hover:text-white border border-emerald-400 hover:bg-emerald-400 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">Save</button>
    </form>
</div>