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

    .div3 {
        margin: auto;
        width: 21%;
        margin-top: -470px;
        padding: 10px;
        background-color: #edf2f7;
        border-radius: 25px;
        margin-right: 50px;
    }
</style>
<div class="div2 h-3/5 w-2/5" style="text-align: center">
    <form action="#" method="POST">
        @csrf
        <br>
        <br>
        @foreach($usersDetails as $a)
        <p class="text-lg font-medium underline decoration-green-800 decoration-2 underline-offset-4">{{ $a->month }} for {{ $a->name }}</p>
        <br>
        <br>
        <span align="left">Inflow</span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <span align="right" class="text-blue-500">+ {{ $a->currency }} {{ $a->amount }}</span>
        <br>
        <br>
        <span align="left">Outflow</span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <span align="right" class="text-red-500"> - {{ $a->currency }} {{ $sum }}</span>
        <br>
        <br>
        <hr style="width:70%;text-align:left;margin-left:80;border-width:1;border: 1px solid silver">
        <br>
        <span align="left">Balance</span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <span align="right">{{ $a->amount  -  $sum }}</span>
        @endforeach
    </form>
</div>
<div class="div3 h-40" style="text-align: center">
    <form action="#" method="POST">
        <p class="text-lg font-medium underline decoration-green-800 decoration-2 underline-offset-4"> category </p>
        <br>
        <br>
        <span align="left">Amount</span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <span align="right" class="text-blue-500">vlera</span>
        <br>
        <br>
        <span align="left">Notes</span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <span align="right" class="text-red-500"> notes</span>
        <br>
        <br>
        <hr style="width:70%;text-align:left;margin-left:80;border-width:1;border: 1px solid silver">
        <br>
        <span align="left">Balance</span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <span align="right">{{ $a->amount  -  $sum }}</span>
    </form>
</div>