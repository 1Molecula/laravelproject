<x-layout1>
    <x-slot:title>
        Для администраторов
    </x-slot:title>
    <h1>Для администраторов</h1>
    <table cellpadding="4" border="2">
        <tr><th>ID</th><th>Книга</th><th>Автор</th></tr>
        @foreach ($books as $book)
            <div>
                <tr><td>{{ $book->id }}</td>
                    <div>
                        <td>{{ $book->author }}</td>
                        <div>
                            <td>{{ $book->books }}</td></tr>
            </div>
            </div>
            </div>
        @endforeach
    </table>
</x-layout1>
