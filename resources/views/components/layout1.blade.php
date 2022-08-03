<!DOCTYPE html>
<html>
<style>
    .btn {
        display: inline-block;
        background: #C0C0C0;
        color: #1a202c;
        padding: 0.3rem 1rem;
        text-decoration: none;
        border-radius: 10px;
    }
</style>
<style>
    .btn2 {
        display: inline-block;
        background: #ffffff;
        color: #1a202c;
        padding: 0.07rem 0.3rem;
        text-decoration: none;
        border-radius: 0px;
    }
</style>
<head>
    <meta charset="utf-8">
    <title>{{$title}}</title>
</head>
<body>
<div align="center">
    @auth
        <div align="right">
            <h4><a href="/logout" class="btn">Выйти из сессии</a></h4>
        </div>
    @endauth
    @guest
        <div align="right">
            <h4><a href="/authentication" class="btn">Войти</a></h4>
        </div>
    @endguest
{{$slot}}
</div>
</body>
</html>
