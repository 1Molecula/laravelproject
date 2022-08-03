<x-layout1>
    <x-slot:title>
        Регистрация
    </x-slot:title>
    <h1>Придумайте никнейм и пароль</h1>
    <form method="post">
        @csrf
        <p><input name="name" autocomplete="off" placeholder="Никнейм" pattern="[0-9A-Za-z]{1,}"></p>
        <p><input name="password" type="password" placeholder="Пароль" pattern="[0-9A-Za-z]{8,}"></p>
        <p><input type="submit" value="Создать"></p>
    </form>
    <a href="/authentication" class="btn">Назад</a>
</x-layout1>
