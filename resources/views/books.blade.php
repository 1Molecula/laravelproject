<x-layout1>
    <x-slot:title>
        Авторы и книги
    </x-slot:title>
    <h1>Авторы и книги</h1>
    <h2>Автор: {{$author->authors}}</h2>
    <table border="2" cellpadding="4">
        <tr><th>Книга</th><th>Год выпуска книги</th></tr>
        @foreach ($books as $book)
            <div>
                <tr><td>{{$book->books}}</td>
                <div>
                    <td>{{$book->yearRelease}}</td>
                </div>
                </tr>
            </div>
        @endforeach
    </table>
    <h3><a href="/" class ="btn">Назад</a></h3>
</x-layout1>
