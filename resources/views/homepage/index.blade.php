<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To do list </title>

    <style>
        body{
            background-color: #4287f5;
        }
        table{
            background-color: #b7bcc4;
        }
    </style>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <h1>To Do List </h1>
    <div class="container">
    <div class="boton">
            <a href="/nuevo" class="btn btn-success">Crear nueva tarea</a>
    </div>
        <table class="table">
            <tr>
                <td>Id</td>
                <td>Tarea</td>
                <td>Modificación</td>
            </tr>

            @foreach($todo_arr as $td)
            <tr>
                <td>{{$td->id}}</td>
                <td>{{$td->name}}</td>
                <td><a href="borrar/{{$td->id}}">Borrar</a> | <a href="editar/{{$td->id}}">Editar</a></td>
            </tr>
            @endforeach

        </table>
    </div>
</body>


</html>
