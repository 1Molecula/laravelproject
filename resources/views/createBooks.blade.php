<x-layout1>
    <x-slot:title>
        Создание книги
    </x-slot:title>
    <h1>Новая книга</h1>
    <form method="post">
        @csrf
        <p>Введите название книги:</p>
        <p><input autocomplete="off" name="book" pattern="^[0-9A-Za-zА-Яа-яЁё\s]+${1,}"></p>
        <p>Введите ID автора книги:</p>
        <p><input autocomplete="off" name="author_id"  pattern="[0-9]{1,}"></p>
        <p>Введите год выхода книги:</p>
        <p><input autocomplete="off" name="dateRelease"  pattern="[0-9]{1,}"></p>
        <p><input type="submit" value="Сохранить"></p>
    </form>
    <a href="/admin/books" class ="btn">Назад</a>
</x-layout1>
