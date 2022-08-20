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

<div style="margin-top: -450px;">
    <div>
        <p class="text-base" style="margin-left: 1170px;"> <i>Details</i></p>
    </div>
    <br>
    @foreach($dt as $d)
    <div class="grid grid-cols-1 w-64 h-32 mb-6" style="background-color: #edf2f7; border-radius: 25px; padding: 2px; margin-left: 1070px;">
        <form action="#" method="POST">
            <br>
            <span align="left" style="margin-left:20"><i class="text-emerald-700">money spent: &nbsp;&nbsp;&nbsp;</i>{{ $d->currency }}{{ $d->total }}</span><br>
            <span align="left" style="margin-left:20"><i class="text-emerald-700">spent on: &nbsp;&nbsp;&nbsp;</i>{{ $d->name }}</span><br>
            <span align="left" style="margin-left:20"><i class="text-emerald-700">description: &nbsp;&nbsp;&nbsp;</i>{{ $d->notes }}</span>
        </form>
    </div>
    @endforeach
</div>