<style>
    body {
        background-color: #f8f9fa;
    }

    .login-form {
        width: 350px;
        margin: auto;
        margin-top: 10px;
        margin-bottom: 20px;
        background-color: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .login-form h2 {
        text-align: center;
        margin-bottom: 20px;
    }
</style>

<div class="login-form">
    <h2>Login</h2>
    <form action="login.php" method="post">
        <div class="mb-3">
            <label for="usuario" class="form-label">Usuário</label>
            <input type="text" class="form-control" name="usuario" placeholder="Digite o seu usuário" required>
        </div>
        <div class="mb-4">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" name="senha" placeholder="Digite sua senha" required>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>
</div>