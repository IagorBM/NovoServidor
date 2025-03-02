<?php
include_once("../classes/conect.php");

$obj = new conect();
$resultado = $obj->ConectarBanco();

$sql = "SELECT * FROM PRODUTOS WHERE nome LIKE '".$_GET["var"]."%';";

$consulta = $resultado->prepare($sql);
$produtos = [];

if ($consulta->execute()) {
    $i = 0;
    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        
        echo '<div class="card" style="padding: 2%; float:left; margin-left:10px; margin-bottom:10px;">
                                <img src="' . $linha["url_imgprod"] . '" width=120em" height="90em"
                                    style="border-radius: 5px;">
                                <h3 id="nome">' . $linha["nome"] . '</h3>
                                <p id="preco">R$ ' . $linha["preco"] . '</p>
                                <span id="descricaoCard">' . $linha["descricao"] . '</span>
                                </div>
                                ';
                                $i++;
        
    }
    
    //echo json_encode($produtos); // Retorna os produtos em JSON
} else {
    //echo json_encode(["erro" => "Falha na consulta"]);
    echo 'Erro';
}
?>
