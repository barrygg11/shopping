<html>
<p>購物畫面</p>
    <a href="{{ route('add.list') }}">購買結果</a><p>
    <a href="{{ route('shop.home') }}">回到上頁</a><p>
    <body>
        <form method="post" action="{{ route('save.home') }}">
            @csrf
        <table border = "1">
              <tr>
                <td>商品</td>
                <td>商品價格</td>
                <td>數量</td>
              </tr>
              <tr>
                <td>水</td>
                <td>10</td>
                <td><input type="string" name="add1" value="0"></td>
              </tr>
              <tr>
                <td>可樂</td>
                <td>25</td>
                <td><input type="string" name="add2" value="0"></td>
              </tr>
              <tr>
                <td>麥茶</td>
                <td>15</td>
                <td><input type="string" name="add3" value="0"></td>
              </tr>
              <tr>
                <td>啤酒</td>
                <td>80</td>
                <td><input type="string" name="add4" value="0"></td>
              </tr>
            </form>
        </table>
        <p><input type="submit" value="送出"><p>
        </body>
</html>