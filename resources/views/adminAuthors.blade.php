<x-layout1>
    <x-slot:title>
        Для администраторов: Авторы
    </x-slot:title>
    <h1>Изменение таблицы "Авторы"</h1>
    <table cellpadding="4" border="2">
        <tr><th>ID</th><th>Автор</th><th>Количество книг</th><th>Год рождения</th></tr>
        @foreach ($authors as $author)
            <div>
                <tr><td>{{ $author->id }}</td>
                    <div>
                        <td>{{ $author->authors }}</td>
                        <div>
                            <td>{{ $numberOfBooks[$index] }}</td>
                            <?php
                            $index = $index + 1;
                            ?>
                            <div>
                                <td>{{ $author->yearBirth }}</td>
                                <div>
                                    <td><a class="btn2" href="/admin/authors/deleteAuthor{{{$author->id}}}">Удалить</a></td>
                                    <div>
                                        <td><a class="btn2" href="/admin/authors/editAuthor{{{$author->id}}}">Редактировать</a></td>
                                    </div>
                                </div>
            </div>
            </div>
            </div>
            </tr>
            </div>
        @endforeach
    </table>
    <table width="400">
        <tr><td><h3><a href="/admin" class ="btn">Назад</a></h3></td>
            <td><h3><a class="btn">Добавить книгу</a></h3></td></tr>
    </table>
</x-layout1>
