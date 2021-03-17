<html>
    <head>
        <meta charset= "UTF-8">
        <title>shop</title>
    </head>
    <body>
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