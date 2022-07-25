<x-layout1>
    <x-slot:title>
        Для администраторов: Книги
    </x-slot:title>
    <style>
        .btn1 {
            color: #1a202c;
            text-decoration: none;
        }
    </style>
    <h1>Авторы и книги.</h1>
    <h2>Нажмите на автора, чтобы увидеть список его книг.</h2>
    <table border="2" cellpadding="4">
        <tr><th>Автор</th><th>Год рождения</th></tr>
    @foreach ($authors as $author)
        <div>
            <td><a href="/authors/{{{$author->id}}}" class="btn1">{{ $author->authors }}</a></td>
            <div>
                <td>{{ $author->yearBirth }}</td></tr>
            </div>
        </div>
        </div>
    @endforeach
    </table>
    <h3><a href="/" class ="btn">Назад</a></h3>
</x-layout1>
