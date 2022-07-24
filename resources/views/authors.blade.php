<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
        Авторы и книги
    </title>
    </head>
    <style>
        .btn {
            color: #1a202c;
            text-decoration: none;
        }
    </style>
<body>
    <h1>Авторы и книги.</h1>
    <h2>Нажмите на автора, чтобы увидеть список его книг.</h2>
    <table border="2" cellpadding="4">
        <tr><th>Автор</th><th>Год рождения</th></tr>
    @foreach ($authors as $author)
        <div>
            <td><a href="/{{{$author->id}}}" class="btn">{{ $author->authors }}</a></td>
            <div>
                <td>{{ $author->yearBirth }}</td></tr>
            </div>
        </div>
        </div>
    @endforeach
    </table>
    </body>
</html>
