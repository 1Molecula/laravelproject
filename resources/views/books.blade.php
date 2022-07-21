<x-layout1>
    <x-slot:title>
        <h1>Авторы и книги</h1>
    </x-slot:title>
    <h1>Авторы и книги</h1>
    @foreach ($books as $book)
        <div>
            {{ $book->author }}
            <div>
                {{ $book->books }}
            </div>
        </div>
    @endforeach
</x-layout1>
