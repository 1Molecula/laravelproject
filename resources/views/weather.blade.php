<x-layout1>
    <x-slot:title>
        Погода ежеминутно
    </x-slot:title>
    <h1></h1>
    <h2></h2>
    <table border="2" cellpadding="4">
        <tr><th>Температура</th><th>Время</th></tr>
        @foreach ($temperatures as $temperature)
            <div>
                <tr><td>{{$temperature->temperature}}</td>
                    <div>
                        <td>{{$temperature -> added_on}}</td>
                    </div>
                </tr>
            </div>
        @endforeach
    </table>
    <h3><a href="/" class ="btn">Назад</a></h3>
</x-layout1>
