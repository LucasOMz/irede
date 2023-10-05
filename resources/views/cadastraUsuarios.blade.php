<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.7.7/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Cadastro de usuários</title>
</head>
<body>

<h1 class="card-body">Cadastro de usuários</h1>

<form class="card-body max-w-md m-auto">
        <div class="form-control">
          <label class="label">
            <span class="label-text">Usuário</span>
          </label>
          <input type="text" placeholder="Digite seu Usuário" class="input input-bordered" required />
        </div>

        <div class="form-control">
          <label class="label">
            <span class="label-text">Bio</span>
          </label>
          <input type="text" placeholder="Escreva sua Bio" class="input input-bordered" required />
        </div>

        <div class="form-control">
          <label class="label">
            <span class="label-text">Nome</span>
          </label>
          <input type="text" placeholder="Digite seu Nome" class="input input-bordered" required />
        </div>

        <div class="form-control">
          <label class="label">
            <span class="label-text">Email</span>
          </label>
          <input type="email" placeholder="Digite seu Email" class="input input-bordered" required />
        </div>

        <div class="form-control">
          <label class="label">
            <span class="label-text">Senha</span>
          </label>
          <input type="password" placeholder="Digite sua Senha" class="input input-bordered" required />
        </div>


</form>
    
</body>
</html>