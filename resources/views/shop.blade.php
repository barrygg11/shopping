<html>
    <head>
        <meta charset= "UTF-8">
        <title>商品價目表</title>
        <a href="{{ route('add.home') }}">前往購買</a>&emsp;<a href="{{ route('adminlogin.home') }}">管理員</a>&emsp;<p>
    </head>
    <body>
        商品價目表：
        <table border = "1">
            <tr>
            <td>商品序號</td>
            <td>商品名稱</td>
            <td>商品說明</td>
            <td>商品價錢</td>
            </tr> 
        @foreach($shops as $shop)
        <tr>
            <td>{{ $shop['id'] }}</td>
            <td>{{ $shop['name'] }}</td>
            <td>{{ $shop['description'] }}</td>
            <td>{{ $shop['price'] }}</td>
            </tr>
        @endforeach
        </table>
    </body>
</html>