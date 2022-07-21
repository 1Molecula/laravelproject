<x-layout1>
    <x-slot:title>
        Авторы и книги
    </x-slot:title>
    <h1>Авторы и книги</h1>
    <table border="2" cellpadding="4">
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
