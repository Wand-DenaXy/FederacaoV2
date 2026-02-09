    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ficha Formativa 3 - 5417 - Clientes</title>
        <link rel="stylesheet" href="css/datatables.css">
        <link rel="stylesheet" href="css/select2.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <script src="/js/lib/jquery.js"></script>
        <script src="/js/lib/datatables.js"></script>
        <script src="/js/lib/select2.js"></script>
        <script src="/js/lib/sweatalert.js"></script>
        <script src="/js/lib/bootstrap.js"></script>
        <script src="/js/clube.js"></script>
    </head>

    <body>
    @auth
    <div class="container mt-5">
        <h2>Nome de Utilizador</h2>
        <h3>{{ Auth::user()->user }}</h3>
    </div>
    <div class="container mt-5">
        <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="btn btn-info">Logout</button>
        </form>
        <br>
            <form action="/criarClube" method="POST">
            @csrf
            <div class="col-md-6">
                <label for="nome" class="form-label">Nome do Clube</label>
                <input type="text" name="nome" class="form-control" id="nome" required>

                <label for="email" class="form-label">Email do Clube</label>
                <input type="text" name="email" class="form-control" id="email" required>
                
                <label for="telefone" class="form-label">Telefone</label>
                <input type="text" name="telefone" class="form-control" id="telefone" required>
            
                <label for="localidade" class="form-label">Localidade do Clube</label>
                <input type="text" name="localidade" class="form-control" id="localidade" required>

            </div>
            <br>
            <button type="submit" class="btn btn-info">Criar Clube</button>
        </form>

    <div class="container mt-5">
        <h2>Todos Clubes</h2>
        <table class="table table-striped" id="tblClubes">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Localidade</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clube as $c)
                <tr>
                    <td>{{ $c->nome }}</td>
                    <td>{{ $c->email }}</td>
                    <td>{{ $c->telefone }}</td>
                    <td>{{ $c->localidade }}</td>
                    <td>
                    <form action="/editarClube/{{ $c->id }}" method="get" style="display:inline">
                        <button type="submit" class="btn btn-warning">Editar</button>
                    </form>
                    </td>
                    <td><form action="/eliminarClube/{{ $c->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Emilinar</button>
                    </form>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>        
    </div>
    @else
    <div class="container mt-5">
        <div class="card">
            <h5 class="card-header">Utilizador</h5>
            <div class="card-body">
                <h5 class="card-title">Registar</h5>
                <form class="row g-3" action="/registar" method="POST">
                    @csrf
                    <div class="col-md-6">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="user" class="form-control" id="username" required>
                    </div>
                    <div class="col-md-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" required>
                    </div>
                    <div class="col-md-3">
                        <label for="idtpUser" class="form-label">Tipo Utilizador</label>
                        <select class="form-control" id="idtpUser" name="idtpUser">
                            <option value="1">Administrador</option>
                            <option value="2">Jogador</option>
                            <option value="3">Gestor</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Registar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="card">
            <h5 class="card-header">Login</h5>
            <div class="card-body">
                <form class="row g-3" action="/login" method="POST">
                    @csrf
                    <div class="col-md-6">
                        <label for="usernameLogin" class="form-label">Username</label>
                        <input type="text" class="form-control" id="usernameLogin" name="usernameLogin" required>
                    </div>
                    <div class="col-md-3">
                        <label for="passwordLogin" class="form-label">Password</label>
                        <input type="password" class="form-control" id="passwordLogin" name="passwordLogin" required>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endauth
    </body>
    </html>