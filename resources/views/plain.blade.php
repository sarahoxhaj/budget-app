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
<title>Budget Details</title>
<div class="div2 h-3/5 w-2/5" style="text-align: center">
    <form action="#" method="POST">
        @csrf
        <br>
        <br>
        @foreach($details as $a)
        <p class="text-lg font-medium underline decoration-green-800 decoration-2 underline-offset-4">{{ $a->month }} for {{ $a->name }}</p>
        <br>
        <br>
        <span align="left">Inflow</span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <span align="right" class="text-blue-500">+ {{ $a->currency }} {{ $a->amount }}</span>
        <br>
        <br>
        <span align="left">Outflow</span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <span align="right" class="text-red-500">{{ $a->currency }} 0</span>
        <br>
        @endforeach
    </form>


</div>