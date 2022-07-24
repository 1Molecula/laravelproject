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
            </div>
            </div>
            </div>
            </tr>
            </div>
        @endforeach
    </table>
    <h3><a href="/admin" class ="btn">Назад</a></h3>
</x-layout1>
