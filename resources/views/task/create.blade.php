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
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <div class="content">
                <form action="{{ url('task') }}" method="POST">
                    @csrf
                    <input type="text" name="task" id="task" placeholder="Tarefa"> <br/>
                    <input type="text" name="category" id="category" placeholder="Categoria"> <br/>
                    <button type="submit" >Salvar</button>
                </form>
            </div>
        </div>
    </body>
</html>
