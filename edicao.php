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

<?php 
    $id = $_GET["id"];

    echo "<h1>Editar o carro de registro - $id</h1>";
    $sql = "SELECT * FROM carrosinicial WHERE id={$id}";
    $resultado = $conexao->query($sql);
    $carro = $resultado->fetch_object();

    $marcaCarros = $carro->marca;
    $modeloCarros = $carro->modelo;
    $anoCarros = $carro->ano;
    $precoCarros = $carro->preco;
    $kmCarros = $carro->km;
    $cambioCarros = $carro->cambio;
    $descricaoCarros = $carro->descricao;
?>

<form action="?page=atuarNoBanco" method="post" class="mt-4">
    <input type="hidden" name="acao" value=editar>
    <input type="hidden" name="id" value="<?php echo $id ?>">

    <label for="marca">Marca: </label>
    <input type="text" name="marca" placeholder="Digite o marca do carro ..." class="form-control mt-2 mb-3" value="<?php echo $marcaCarros ?>"required>

    <label for="modelo">Modelo: </label>
    <input type="text" name="modelo" placeholder="Digite o modelo do carro ..." class="form-control mt-2 mb-3" value="<?php echo $modeloCarros ?>" required>

    <label for="ano">Ano: </label>
    <input type="number" name="ano" placeholder="Digite o ano do carro ..." class="form-control mt-2 mb-3"  value="<?php echo $anoCarros ?>" required>

    <label for="preco">Valor: </label>
    <input type="number" name="preco" placeholder="Digite o valor do carro ..." class="form-control mt-2 mb-3" value="<?php echo $precoCarros ?>" required>

    <label for="km">Quilometragem: </label>
    <input type="number" name="km" placeholder="Digite a quilometragem atual ..." class="form-control mt-2 mb-3" value="<?php echo $kmCarros ?>" required>

    <div class="mb-3">
    <label for="cambio" class="mb-2">Tipo do câmbio: </label>
    <select name="cambio" class="form-select" <?php echo $cambioCarros ?> required>
        <option value="">Selecione o tipo de câmbio</option>
        <option value="Manual">Manual</option>
        <option value="Automático">Automático</option>
    </select>
    </div>

    <label for="descricao">Detalhes: </label>
    <input type="text" name="descricao" placeholder="Descreva detalhes importantes ..." class="form-control mt-2 mb-3" value="<?php echo $descricaoCarros ?>" required>

    <button type="submit" class="btn btn-success">Editar</button>
</form>