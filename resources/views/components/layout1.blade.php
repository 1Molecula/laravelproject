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
.center {
width: 500px; /* Ширина элемента в пикселах */
padding: 20px; /* Поля вокруг текста */
margin: auto; /* Выравниваем по центру */
background: #ffffff; /* Цвет фона */
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
<div class="center">
{{$slot}}
</div>
</body>
</html>
