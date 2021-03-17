<html>
    <head>
        <meta charset= "UTF-8">
        <title>商品價目表</title>
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
    <p>購物車：</p>
    <input type="submit" value="送出"><p>
    <body>
        <table border = "1">
              <tr>
                <td>商品</td>
                <td>商品價格</td>
                <td>數量</td>
              </tr>
              <tr>
                <td>白開水</td>
                <td>100</td>
                <td><input type="string" name="amount1" value=""></td>
              </tr>
              <tr>
                <td>果汁</td>
                <td>150</td>
                <td><input type="string" name="amount2" value=""></td>
              </tr>
              <tr>
                <td>威士忌</td>
                <td>10000</td>
                <td><input type="string" name="amount3" value=""></td>
              </tr>
              <tr>
                <td>可樂</td>
                <td>50</td>
                <td><input type="string" name="amount4" value=""></td>
              </tr>
</html>