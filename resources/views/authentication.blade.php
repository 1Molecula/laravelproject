<x-layout1>
    <x-slot:title>
        Вход
    </x-slot:title>
    <h1>Введите пароль для входа в редактор</h1>
    <form method="post">
        @csrf
        <p><input name="name" autocomplete="off" placeholder="Никнейм" pattern="[0-9A-Za-z]{1,}"></p>
        <p><input name="password" type="password" placeholder="Пароль" pattern="[0-9A-Za-z]{1,}"></p>
        <p><input type="submit" value="Проверить"></p>
    </form>
    <p><a href="/registration" class="btn">Зарегестрироваться</a></p>
<a href="/" class="btn">Назад</a>
</x-layout1>
