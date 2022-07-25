<x-layout1>
    <x-slot:title>
        Изменение автора
    </x-slot:title>
    <h1>Редактор автора "{{$author}}"</h1>
    <h2>Измените нужные вам значения</h2>
    <form method="post">
        @csrf
        <p>Имя автора:</p>
        <p><input name="author" autocomplete="off" value="{{$author}}"></p>
        <p>Год рождения автора:</p>
        <p><input name="yearBirth" autocomplete="off" value="{{$yearBirth}}">
        <input name="id" type="hidden" value="{{$id}}"></p>
        <p><input type="submit" value="Сохранить изменения"></p>
    </form>
    <a href="/admin/authors" class ="btn">Назад</a>
</x-layout1>
