<!DOCTYPE html>
<html lang ="en">
    <head>
        <meta charset="UTF-8">
        <meta name="adminlogin" content="width=device-width, initial-scale=1.0">
        <title> 管理者 </title>
    </head>
    <body>
        <h1>登入</h1>
        @if(isset($err))
        {{ $err }}
        @endif
        <form action="login" method="post">
            <input name="account" type="text">
            <input name="password" type="password">
            <input type="submit" value="登入">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>
    </body>
</html>
