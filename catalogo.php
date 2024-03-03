<h3> Catálogo COMPLETO: </h3>

<form action="?page=catalogo" method="post" class="mt-4">
    <input type="hidden" name="acao" value="cadastrar">


<?php
$sql = "SELECT * FROM carrosinicial";

$resultado = $conexao->query($sql);

$qtdLinhas = $resultado->num_rows;

if ($qtdLinhas > 0) {
    echo "<div class='row'>";
    while($produto = $resultado->fetch_assoc()){
        echo "<div class='col-md-4'>"; // Divida cada card em duas colunas em telas médias (md)
        echo "<div class='card mt-4 bg-light'>
                <div class='card-body d-flex flex-column align-items-center'>
                    <img src='imagens/car-card.png' alt='Car' />
                    <!--<h4>Nº registro: {$produto['id']}</h4>-->
                    <h5>{$produto['marca']} {$produto['modelo']}</h5>
                    <p>Ano: {$produto['ano']}</p> 
                    <p>Valor: {$produto['preco']}</p>
                    <p>Km atual: {$produto['km']}</p>
                    <p>Câmbio: {$produto['cambio']}</p>
                    <p>Descrição: {$produto['descricao']}</p>

                    <form action=\"?page=atuarNoBanco\" method=\"post\">
                    <input type=\"hidden\" name=\"acao\" value=\"comprar\">
                    <input type=\"hidden\" name=\"id\" value=\"{$produto['id']}\">
                    <button type=\"submit\" class=\"btn btn-success\">Quero comprar</button>
                    </form>                  

                </div>
            </div>";
        echo "</div>";
    }
    echo "</div>"; // Feche a div da linha
} else {
    echo "<p class='alert alert-danger mt-4'>Não há nenhum carro cadastrado no sistema.</p>";
}
?>


