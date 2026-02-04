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
    <script src="/js/login.js"></script>
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <h5 class="card-header">Utilizador</h5>
            <div class="card-body">
                <h5 class="card-title">Registar</h5>
                <form class="row g-3" action="/registar" method="POST">
                    @csrf
                    <div class="col-md-6">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="user" class="form-control" id="username">
                    </div>
                    <div class="col-md-3">
                        <label for="password" class="form-label">Password</label>
                       <input type="password" name="pw" class="form-control" id="password">
                    </div>

                    <div class="col-md-3">
                        <label for="tpUser" class="form-label">Tipo Utilizador</label>
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


        <div class="container mt-5">
            <div class="card">
                <h5 class="card-header">Login</h5>
                <div class="card-body">
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label for="usernameLogin" class="form-label">Username</label>
                            <input type="text" class="form-control" id="usernameLogin">
                        </div>
                        <div class="col-md-3">
                            <label for="passwordLogin" class="form-label">Password</label>
                            <input type="password" class="form-control" id="passwordLogin">
                        </div>

                        <div class="col-12">
                            <button type="button" class="btn btn-primary" onclick="login()">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

</body>

</html>