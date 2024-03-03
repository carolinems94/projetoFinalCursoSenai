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
                <h4>Nº registro: {$produto['id']}</h4>
                <h5>Marca: {$produto['marca']}</h5>
                <p>Modelo: {$produto['modelo']}</p> 
                <p>Ano: {$produto['ano']}</p> 
                <p>Valor: {$produto['preco']}</p>
                <p>Km: {$produto['km']}</p>
                <p>Câmbio: {$produto['cambio']}</p>
                <p>Descricao: {$produto['descricao']}</p>
                
                <button class='btn btn-success' onclick=\"location.href='?page=edicao&id={$produto['id']}'\">Editar</button>
                <button class='btn btn-danger' onclick=\"location.href='?page=exclusao&id={$produto['id']}'\">Deletar</button>
            </div>
        </div>";
    }
} else {
    echo "<p class='alert alert-danger' mt-4>Não há nenhum produto cadastrado no sistema.</p>";
}
?>