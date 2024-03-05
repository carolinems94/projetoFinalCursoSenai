<?php 
    session_start();
    if(empty($_SESSION)){
   echo "<script>
        alert('Permissão negada! Somente administrador pode cadastrar veículo. Se você é usuário administrador, acesse a página de login!')
    </script>";
    echo
    "<script>
        location.href='?page=index.php'
    </script>";

    }
?>

<h3>Página de Cadastro: </h3>

<form action="?page=atuarNoBanco" method="post" class="mt-4">
    <input type="hidden" name="acao" value="cadastrar">

    <div class="mb-3">
    <label for="marca" class="mb-2">Marca: </label>
    <input type="text" name="marca" class="form-control" placeholder="Digite a marca do carro ..." oninput="this.value = this.value.toUpperCase()" required>
    </div>


    <div class="mb-3">
        <label for="modelo" class="mb-2">Modelo: </label>
        <input type="text" name="modelo" class="form-control" placeholder="Digite o modelo do carro ..."oninput="this.value = this.value.toUpperCase()" required>
    </div>

    <div class="mb-3">
        <label for="ano" class="mb-2">Ano: </label>
        <input type="number" name="ano" class="form-control" placeholder="Digite o ano do carro ..." required>
    </div>

    <div class="mb-3">
        <label for="preco" class="mb-2">Valor: </label>
        <input type="number" name="preco" class="form-control" placeholder="Digite o valor do carro, separar o valor inteiro por virgula(,) ..." required>
    </div>

    <div class="mb-3">
        <label for="km" class="mb-2">Quilometragem: </label>
        <input type="number" name="km" class="form-control" placeholder="Digite a quilometragem atual ..." required>
    </div>

    <div class="mb-3">
    <label for="cambio" class="mb-2">Tipo do câmbio: </label>
    <select name="cambio" class="form-select" required>
        <option value="">Selecione o tipo de câmbio</option>
        <option value="Manual">Manual</option>
        <option value="Automático">Automático</option>
    </select>
</div>

    <div class="mb-3">
        <label for="descricao" class="mb-2">Detalhes: </label>
        <input type="text" name="descricao" class="form-control" placeholder="Descreva detalhes importantes ..." required>
    </div>

    <button type="submit" class="btn btn-primary">Cadastrar</button>

</form>