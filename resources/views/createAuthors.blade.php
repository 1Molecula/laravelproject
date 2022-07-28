<x-layout1>
    <x-slot:title>
        Создание автора
    </x-slot:title>
    <h1>Новый автор</h1>
    <form method="post">
        @csrf
        <p>Введите имя автора:</p>
        <p><input autocomplete="off" name="authorName" pattern="^[A-Za-zА-Яа-яЁё\s]+${1,}"></p>
        <p>Введите год рождения автора:</p>
        <p><input autocomplete="off" name="yearBirth" pattern="[0-9]{1,}"></p>
        <p><input type="submit" value="Сохранить"></p>
    </form>
    <a href="/admin/authors" class ="btn">Назад</a>
</x-layout1>
