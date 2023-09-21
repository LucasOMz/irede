<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.7.7/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Lista de usuários</title>
</head>
<body>

<h1 class="w-full text-center text">Lista de usuários</h1>
<div class="overflow-x-auto p-20">
  <table class="table table-zebra">
    <!-- head -->
    <thead>
      <tr>
        <th>Usuário</th>
        <th>Nome</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>

    @foreach ($usuarios as $usuario)

    <!-- row 1 -->
    <tr>
        <th>{{$usuario->usuario}}</th>
        <td>{{$usuario->nome}}</td>
        <td>{{$usuario->email}}</td>
      </tr>

    @endforeach
      
      
    </tbody>
  </table>
</div>
    
</body>
</html>