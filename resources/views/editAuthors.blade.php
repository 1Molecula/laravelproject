<x-layout1>
    <x-slot:title>
        Изменение автора
    </x-slot:title>
    <h1>Редактор автора "{{$author}}"</h1>
    <h2>Измените нужные вам значения</h2>
    <form method="post">
        @csrf
        <p>Имя автора:</p>
        <p><input name="author" autocomplete="off" value="{{$author}}"  pattern="^[A-Za-zА-Яа-яЁё\s]+${1,}"></p>
        <p>Год рождения автора:</p>
        <p><input name="yearBirth" autocomplete="off" value="{{$yearBirth}}"  pattern="[0-9]{1,}">
        <input name="id" type="hidden" value="{{$id}}"></p>
        <p><input type="submit" value="Сохранить изменения"></p>
    </form>
    <a href="/admin/authors" class ="btn">Назад</a>
</x-layout1>
