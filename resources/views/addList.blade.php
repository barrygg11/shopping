<html>
    <head>
        <meta charset= "UTF-8">
        <title>add</title>
    </head>
    <a href="{{ route('add.home') }}">繼續購買</a><p>
    <body>
        @foreach($adds as $add)
        <div class="border-t border-gray-300 my-1 p-2">
        <h2 class="font-bold text-lg">購買紀錄: {{$add->id}}</h2>
        <h2 class="font-bold text-lg">水: {{$add->add1 *10}}元</h2>
        <h2 class="font-bold text-lg">可樂: {{$add->add2 *25}}元</h2>
        <h2 class="font-bold text-lg">麥茶: {{$add->add3 *15}}元</h2>
        <h2 class="font-bold text-lg">啤酒: {{$add->add4 *80}}元</h2>
        <h2 class="font-bold text-lg">總金額: {{$add->add1 *10 + $add->add2 *25 + $add->add3 *15 + $add->add4 *80}}元</h2>
        <p>
        ------------------
        </p>    
        @endforeach
        {{ $adds->links() }}
    </body>
</html>