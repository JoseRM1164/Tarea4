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
        table, form{
            background-color: #b7bcc4;
            padding: 30px;
        }
    </style>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <h1>To Do List </h1>
    <div class="container">
    <div class="text-right">
            <a href="/to-do-list" class="btn btn-danger">Cancelar</a>
    </div>
    <form action="../actualizado/{{$todo_arr->id}}">
        <input type="text" name="name" Value='{{$todo_arr->name}}' class="form-control">
        <input type="submit" Value="Agregar" class="btn btn-success">
    </form>

    </div>
</body>


</html>
