<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
        <div>
            <p> <a href="{{ url('/task') }}">Criar tarefa</a> </p>
                @if (session('sucess'))
                    <p> <strong> {{ session('sucess') }} </strong> </p>
                @endif
            <table border="1">
                <thead>
                    <tr>
                        <th>Tarefa</th>
                        <th>Categoria</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                        <tr style="text-decoration: {{ $task->status }}">
                            <td> {{ $task->task }} </td>
                            <td> {{ $task->category }} </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
