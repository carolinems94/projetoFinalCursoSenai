<?php
$id = $_GET["id"];
$sql = "SELECT * FROM carrosinicial
            WHERE id={$id};";
$resultado = $conexao->query($sql);
$quantidadeLinhas = $resultado->num_rows;

if ($quantidadeLinhas > 0) {
    $carro = $resultado->fetch_assoc();
    echo "<h1>Você realmente deseja deletar este carro ?</h1>";
    echo
    "<div class=\"card mt-4\">
            <div class=\"card-body\">
                <h3>Nº registro: {$carro['id']}</h3>
                <h4>marca completo: {$carro['marca']} {$carro['modelo']}</h4>                
                <p>Data Nasc.: {$carro['ano']}</p>
                <p>preco: {$carro['preco']}</p>
                <p>km: {$carro['km']}</p>
                <p>cambio: {$carro['cambio']}</p>
                <p>descricao: {$carro['descricao']}</p>
                
                <form action=\"?page=atuarNoBanco\" method=\"post\">
                <input type=\"hidden\" name=\"acao\" value=\"deletar\">
                <input type=\"hidden\" name=\"id\" value=\"{$carro['id']}\">
                <button type=\"submit\" class=\"btn btn-success\">Sim</button>
                </form>
                 <button class=\"btn btn-danger mt-2\" onclick=\"location.href='?page=vercarros'\">Não</button>
               
            </div>    
        </div>";
} else {
    echo "<p class=\"alert alert-danger mt-4\">Não foi possível encontrar este carro.</p>";
}

?>