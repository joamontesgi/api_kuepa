<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<table class="table table-striped table-light mt-4" id="example">
            <thead style="background-color: #94b43b">
            <tr>
                <th>Documento</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Opciones</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($products as $estudiantes)
                <tr>
                        <td>{{$estudiantes->price}}</td>
                        <td>{{$estudiantes->name}}</td>
                        <td>{{$estudiantes->units}}</td>
</tr>   
@endforeach     

</body>
</html>