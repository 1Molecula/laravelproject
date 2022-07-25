<x-layout1>
    <x-slot:title>
        Изменение книги
    </x-slot:title>
    <h1>Редактор книги "{{$book}}"</h1>
    <h2>Измените нужные вам значения</h2>
    <form method="post">
        @csrf
        <p>Название книги:</p>
        <p><input name="book" autocomplete="off" value="{{$book}}"></p>
        <p>ID автора книги:</p>
        <p><input name="author_id" autocomplete="off" value="{{$author_id}}"></p>
        <p>Год выхода книги:</p>
        <p><input name="dateRelease" autocomplete="off" value="{{$yearRelease}}">
        <input name="id" type="hidden" value="{{$id}}"></p>
        <p><input type="submit" value="Сохранить изменения"></p>
    </form>
    <a href="/admin/books" class ="btn">Назад</a>
</x-layout1>
