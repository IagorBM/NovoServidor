<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendedor</title>
    <link rel="stylesheet" href="../css/vendedor.css">
    <link rel="stylesheet" href="../css/cartao.css">
    <link rel="icon" type="image" href="tandem.png">
</head>

<body>
    <header>
        <div class="navbar2">
            <div class="logos">Tandem &copy;</div>
            <a href="vendedortemp.php">Voltar</a>
        </div>
    </header>


    <div class="navbar">
        <nav>
            <ul>
                <h3 class="hh">O que vamos vender hoje?</h3>
            </ul>
        </nav>
    </div>

    <form enctype="multipart/form-data" method="post" action="item_cadastro.php">
        <div class="image-container">

            <a class="box" href="#content1" id="linkP">
                <img class="img1" src="prod.png" alt="Produtos">
                <h3>Produtos</h3>
                <p>Produtos em geral, como jóias, pulseiras, acessórios, sapatos, artigos decorativos, etc.</p>
            </a>


            <a  class="box" href="#content2" id="linkC">
                <img src="alimentos2.png" alt="Produto 2">
                <h3>Alimentos</h3>
                <p>Pães de forma, sucos naturais, feiras, verduras, salgados e doces.</p>
            </a>


            <a  class="box" href="#content3" id="linkS">
                <img src="servicos2.png" alt="Produto 3">
                <h3>Serviços</h3>
                <p>Trabalhos de Jardinagem, limpeza, trabalhos temporários, entre outros.</p>
            </a>
            </li>
            </ul>

        </div>




        <div class="textContainer">
            <div id="content1">
            <span style="display: none;"><!-----><input type="checkbox" value="P" name="tipoP" id="tipoP"><!-----></span>

                <input type="file" name="fotoP">
                <input type="text" name="nomeP" placeholder="nome">
                R$ <input type="number" name="precoP" step="any" placeholder="1.50">
                <input type="text" name="descricaoP" placeholder="descrição">
                <input type="submit" name="cadastro" value="cadastrar">
            </div>

            <div id="content2">
            <span style="display: none;"><!-----><input type="checkbox" value="C" name="tipoC" id="tipoC" ><!-----></span>
                <input type="file" name="fotoC">
                <input type="text" name="nomeC" placeholder="nome">
                R$ <input type="number" name="precoC" step="any" placeholder="1.50">
                <input type="text" name="descricaoC" placeholder="descrição">
                <input type="submit" name="cadastro" value="cadastrar">

            </div>

            <div id="content3">
            <span style="display: none;"><!-----><input type="checkbox" value="S" name="tipoS" id="tipoS"><!-----></span>
                <input type="file" name="fotoS">
                <input type="text" name="nomeS" placeholder="nome">
                R$ <input type="number" name="precoS" step="any" placeholder="1.50">
                <input type="text" name="descricaoS" placeholder="descrição">
                <input type="submit" name="cadastro" value="cadastrar">
            </div>

        </div>
    </form>

    <footer>
        <p>&copy; 2024 Tandem - Conectando Negócios nas Ruas.</p>
    </footer>

</body>
<script>
        document.getElementById("linkP").addEventListener("click", function() {
            document.getElementById("tipoP").checked = true;
        });

        document.getElementById("linkC").addEventListener("click", function() {
            document.getElementById("tipoC").checked = true;
        });

        document.getElementById("linkS").addEventListener("click", function() {
            document.getElementById("tipoS").checked = true;
        });
    </script>
</html>

<?
extract($_POST);

if (isset($_POST["cadastro"])) {
    include("../classes/conect.php");
    $obj = new conect();
    $resultado = $obj->ConectarBanco();

    

    if(isset($_POST["tipoP"])){
        $destino = '../imagens/' . $_FILES['fotoP']['name'];
        $arquivo_temp = $_FILES['fotoP']['tmp_name'];
        move_uploaded_file($arquivo_temp, $destino);
        
        $tipo = $_POST["tipoP"];
        $nome = $_POST["nomeP"];
        $preco = $_POST["precoP"];
        $descricao = $_POST["descricaoP"];
    }
    
    
    if(isset($_POST["tipoC"])){
        $destino = '../imagens/' . $_FILES['fotoC']['name'];
        $arquivo_temp = $_FILES['fotoC']['tmp_name'];
        move_uploaded_file($arquivo_temp, $destino);
        
    $tipo = $_POST["tipoC"];
    $nome = $_POST["nomeC"];
    $preco = $_POST["precoC"];
    $descricao = $_POST["descricaoC"];}

if(isset($_POST["tipoS"])){
    $destino = '../imagens/' . $_FILES['fotoS']['name'];
    $arquivo_temp = $_FILES['fotoS']['tmp_name'];
    move_uploaded_file($arquivo_temp, $destino);

    $tipo = $_POST["tipoS"];
    $nome = $_POST["nomeS"];
    $preco = $_POST["precoS"];
    $descricao = $_POST["descricaoS"];}

    $sql = "INSERT INTO PRODUTOS (url_imgProd,nome,preco,descricao,tipo) VALUES ('" . $destino . "','" . $nome . "','" . $preco . "','" . $descricao . "','" . $tipo . "');";

    $consulta = $resultado->prepare($sql);
    if ($consulta->execute()) {
        echo '
            <script>
                alert("Item Cadastrado");
            </script>
        ';
    }
}
?>