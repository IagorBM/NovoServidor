<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!--==========arrumei o link do css==============-->
    <link rel="stylesheet" href="../css/esqueceu.css">
    <!--====================================-->
</head>

<body>

    <div class="central">
        <div class="divlogo"><iframe src="nova/index.php" width="350px" height="262px" frameborder="2"></iframe></div>



        <form method="post" action="esqueceu.html">

            <div class="content">

                <label for="login"><b>Confirme seu Email: </b></label>
                <input id="email" name="email" placeholder="Email" type="email">


                <label for="senha"><b>Código: </b></label>
                <input id="confirmar" name="confirmar" placeholder="Confirme" maxlength="20" type="password">

                <a id="bigode" class="b" href="cadastro.php">Confirmar</a>
                <a id="volta" class="b" href="../../../login.php">Voltar</a>

            </div>
        </form>
    </div>



</body>

</html>