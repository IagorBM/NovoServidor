<?
session_start();

include_once("../classes/conect.php");

$obj = new conect();
$resultado = $obj->ConectarBanco();

$sql = "SELECT * FROM produtos;";

$consulta = $resultado->prepare($sql);
$indice = 0;

if ($_SESSION['Login'] == FALSE) {
  session_destroy();
  header("location:login.php");
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../css/vendedortemp.css">
  <link rel="stylesheet" type="text/css" href="../css/barLateral.css">
  <link rel="stylesheet" type="text/css" href="../css/produtosV.css">

</head>

<body>
  <form method="post" action="vendedortemp.php">
    <div class="barLat">
      <!-- The sidebar -->
      <div class="sidebar">
        <a class="active" href="#home">Home</a>
        <a href="item_cadastro.php">vender</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
        <a href="sair.php">Logout</a>
      </div>

      <!-- Page content -->
      <div class="conteudo">


        <br>

        <div style="text-align:center">
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
        </div>
        <div class="produtos">
          <div class="grid">
            <?

            $indice = 0;
            if ($consulta->execute()) {
              while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                $avaliacao = round($linha["avaliacao"]);

                echo '
                <div class="card">
                    <img src="' . $linha["url_imgprod"] . '" alt="Imagem do produto">
            
                    <div class="card-info">
                        <div class="texto-produto">
                            <h3 id="nome">' . $linha["nome"] . '</h3>
                            <p id="preco">R$ ' . $linha["preco"] . '</p>
                            <span id="descricaoCard">' . $linha["descricao"] . '</span>
                            <div class="avaliacao">';

                // Estrelas
                for ($i = 1; $i <= 5; $i++) {
                  if ($i <= $avaliacao) {
                    echo '<span class="estrela cheia">★</span>';
                  } else {
                    echo '<span class="estrela vazia">☆</span>';
                  }
                }

                echo '      </div>
                        </div>
            
                        <!-- Aqui entra o contador de vendas -->
                        <div class="contador-vendas">
                            vendeu ' . $linha["qtd_vendas"] . '
                        </div>
                    </div>
                </div>';
              }
            }
            ?>
          </div>
        </div>

      </div>
    </div>
  </form>
</body>

</html>