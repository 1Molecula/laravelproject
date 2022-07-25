<x-layout1>
    <x-slot:title>
        Вход
    </x-slot:title>
    <h1>Введите пароль для входа в редактор</h1>
    <form method="post">
        @csrf
        <p>Пароль:</p>
        <p><input name="password" type="password" pattern="[0-9]{4}"></p>
        <p><input type="submit" value="Проверить"></p>
    </form>
<a href="/" class="btn">Назад</a>
</x-layout1>
