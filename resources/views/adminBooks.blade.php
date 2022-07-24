<x-layout1>
    <x-slot:title>
        Для администраторов: Книги
    </x-slot:title>
    <h1>Изменение таблицы "Книги"</h1>

    <table cellpadding="4" border="2">
        <tr><th>ID</th><th>Книга</th><th>ID автора</th><th>Автор книги</th><th>Год выхода книги</th></tr>
        @foreach ($books as $book)
            <div>
                <tr><td>{{ $book->id }}</td>
                    <div>
                        <td>{{ $book->books }}</td>
                        <div>
                            <td>{{ $book->author_id }}</td>
                            <div>
                                <td>{{ $authors[$index] -> authors}}</td>
                                <?php
                                $index = $index + 1;
                                ?>
                            <div>
                                <td>{{ $book->yearRelease }}</td>
            </div>
            </div>
            </div>
            </div>
                </tr>
            </div>
        @endforeach
    </table>
    <h3><a href="/admin" class ="btn">Назад</a></h3>
</x-layout1>
