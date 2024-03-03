<?php
$acaoASerFeita = $_POST["acao"];

switch ($acaoASerFeita) {
    case "cadastrar":
        $marca = $_POST["marca"];
        $modelo = $_POST["modelo"];
        $ano = $_POST["ano"];
        $preco = $_POST["preco"];
        $km = $_POST["km"];
        $cambio = $_POST["cambio"];
        $descricao = $_POST["descricao"];

        $sql = "INSERT INTO carrosinicial(id, marca, modelo, ano, preco, km, cambio, descricao) 
                VALUES('DEFAULT', '{$marca}', '{$modelo}', '{$ano}', '{$preco}', '{$km}', '{$cambio}', '{$descricao}');";

        $resultado = $conexao->query($sql);

        if ($resultado) {
            echo "<script>
                alert('Carro inserido no catálogo !')     
                </script>";
            echo "<script>
                location.href='?page=vercarros'
                </script>";
        } else {
            echo "<script>
        alert('Houve um erro ao cadastrar esse carro no catálogo !')     
        </script>";
            echo "<script>
        location.href='?page=vercarros'
        </script>";
        }

        break;

    case "editar":
        $marca = $_POST["marca"];
        $modelo = $_POST["modelo"];
        $ano = $_POST["ano"];
        $preco = $_POST["preco"];
        $km = $_POST["km"];
        $cambio = $_POST["cambio"];
        $descricao = $_POST["descricao"];
        $id = $_POST["id"];

        $sql = "UPDATE carrosinicial
                SET marca='{$marca}',
                    modelo='{$modelo}',
                    ano='{$ano}',
                    preco='{$preco}',
                    km='{$km}',
                    cambio='{$cambio}',
                    descricao='{$descricao}'
                WHERE id={$id}";

        $resultado = $conexao->query($sql);

        if ($resultado) {
            echo "<script>
                alert(\"Alteração realizada com sucesso\")     
                </script>";
            echo "<script>
                location.href='?page=vercarros'
                </script>";
        } else {
            echo "<script>
        alert('Alteração não realizada ! Tente novamente !')     
        </script>";
            echo "<script>
        location.href='?page=vercarros'
        </script>";
        }


        break;
    case "deletar":
        $id = $_POST["id"];
        $sql = "DELETE FROM carrosinicial
                    WHERE id={$id}";

        $resultado = $conexao->query($sql);
        if ($resultado) {
            echo
            "<script>
                    alert(\"Carro deletado com sucesso!\");
                </script>";
            echo
            "<script>
                    location.href=\"?page=vercarros\";
                </script>";
        } else {
            "<script>
                    alert(\"Houve um erro ao tentar deletar este carro. Tente novamente mais tarde.\");
                </script>";
            echo
            "<script>
                    location.href=\"?page=vercarros\";
                </script>";
        }

        break;
        case "comprar":
            $id = $_POST["id"];
            $sql = "DELETE FROM carrosinicial
                        WHERE id={$id}";
    
            $resultado = $conexao->query($sql);
            if ($resultado) {
                echo
                "<script>
                        alert(\"Parabéns, compra realizada com sucesso!\");
                    </script>";
                echo
                "<script>
                        location.href=\"?page=vercarros\";
                    </script>";
            } else {
                "<script>
                        alert(\"Houve um erro ao tentar comprar este carro. Tente novamente mais tarde.\");
                    </script>";
                echo
                "<script>
                        location.href=\"?page=catalogo\";
                    </script>";
            }
    
            break;
}
