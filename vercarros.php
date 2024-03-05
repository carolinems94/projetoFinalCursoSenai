<?php 
    session_start();
    if(empty($_SESSION)){
   echo "<script>
        alert('Permissão negada, somente admistrador pode cadastrar veiculo, se você é usuario adm acesse a pagina de login!')
    </script>";
    echo
    "<script>
        location.href='?page=index.php'
    </script>";

    }
?>

<h2>Todos os carros do catálogo: </h2>

<?php
$sql = "SELECT * FROM carrosinicial";

$resultado = $conexao->query($sql);

$qtdLinhas = $resultado->num_rows;

if ($qtdLinhas > 0) {

    while($produto = $resultado->fetch_assoc()){
        echo 
        "<div class='card mt-4'>
            <div class='card-body'>
                <p><strong>Marca:</strong> {$produto['marca']}</p>
                <p><strong>Modelo:</strong> {$produto['modelo']}</p> 
                <p><strong>Ano:</strong> {$produto['ano']}</p> 
                <p><strong>Valor:</strong> R$ {$produto['preco']}</p>
                <p><strong>Km:</strong> {$produto['km']}</p>
                <p><strong>Câmbio:</strong> {$produto['cambio']}</p>
                <p><strong>Descricao:</strong> {$produto['descricao']}</p>
                
                <button class='btn btn-success' onclick=\"location.href='?page=edicao&id={$produto['id']}'\">Editar</button>
                <button class='btn btn-danger' onclick=\"location.href='?page=exclusao&id={$produto['id']}'\">Deletar</button>
            </div>
        </div>";
    }
} else {
    echo "<p class='alert alert-danger' mt-4>Não há nenhum produto cadastrado no sistema.</p>";
}
?>