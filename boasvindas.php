
<h3>Carros disponíveis, escolha o seu! </h3>



<?php
$sql = "SELECT * FROM carrosinicial";

$resultado = $conexao->query($sql);

$qtdLinhas = $resultado->num_rows;

if ($qtdLinhas > 0) {
    echo "<div class='row'>";
    while($produto = $resultado->fetch_assoc()){
        echo "<div class='col-md-4'>"; // Divida cada card em duas colunas em telas
        echo "<div class='card mt-4 bg-light'>
                <div class='card-body d-flex flex-column align-items-center'>
                    <img src='imagens/car-card.png' alt='Car' />
                    <!--<h5>Nº registro: {$produto['id']}</h5>-->
                    <h5>{$produto['marca']} {$produto['modelo']}</h5>
                    <h6><strong>Ano: </strong> {$produto['ano']}</h6>
                    <h6><strong>Valor:</strong> R$ {$produto['preco']},00</h6><br>
                    
                    <button class='btn btn-custom' onclick=\"location.href='?page=catalogo'\">Ver mais detalhes</button>

                </div>
            </div>";
        echo "</div>";
    }
    echo "</div>"; // Feche a div da linha
} else {
    echo "<p class='alert alert-danger mt-4'>Não há nenhum carro cadastrado no sistema.</p>";
}
?>

