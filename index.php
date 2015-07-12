<?php
$qtd = NULL;
if (isset($_POST['valida'])) {
    $qtd = $_POST['qtd'];
    $pesoMaximo = $_POST['pesoMaximo'];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Problema da mochila</title>
        <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="style/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="style/css/style.css" rel="stylesheet" media="screen">
    </head>
    <body>
        <div class="row margem">
            <div class="span12">
                <?php if ($qtd == NULL): ?>
                    <div class="input-append input-qtd">
                        <form class="form-inline" action="index.php" method="POST" >
                            <input type="hidden" name="valida" value="true" />
                            <input type="text" name='pesoMaximo' class="input-xlarge" placeholder="Qual o peso máximo da mochila ?">
                            <input type="text" name='qtd' class="input-medium" placeholder="Quantos itens ?">
                            <button class="btn btn-success" type="submit">Criar Mochila</button>
                        </form>
                    </div>
                <?php else: ?> 
                    <table class="table table-bordered table-striped table-hover">
                        <caption><h1>Mochila peso máximo = <span class="peso-maximo"> <?php echo $pesoMaximo ?> Kg </span> </h1></caption>
                        <thead>
                            <tr>
                                <th><center>#</center></th>
                                <th><center>Peso</center></th>
                                <th><center>Valor</center></th>
                            </tr>
                        </thead>
                        <tbody>
                        <form action='view-mochila.php' method="POST">
                            <input type="hidden" name="valida" value="true" />
                            <input type="hidden" name="qtd" value="<?php echo $qtd; ?>" />
                            <input type="hidden" name="pesoMaximo" value="<?php echo $pesoMaximo; ?>" />
                            <?php for ($i = 0; $i < $qtd; $i++): ?>
                                <tr>
                                    <?php echo "<input type='hidden' name='matriz[$i][1]' value='$i'>" ?>
                                    <td><center><?php echo $i ?></center></td>
                                    <td><center><?php echo "<input type='text' name='matriz[$i][2]' class='input-small' placeholder='Qual o peso ?'>" ?></center></td>
                                    <td><center><?php echo "<input type='text' name='matriz[$i][3]' class='input-small' placeholder='Qual o valor ?'>" ?></center></td>
                                </tr>
                            <?php endfor; ?>
                            <tr>
                                <td colspan="3"><center><button class="btn btn-large btn-success" type="submit">Enviar</button> </center></td>
                            </tr> 
                        </form>
                        </tbody>
                    </table>
                <?php endif; ?>
            </div>
        </div>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="style/js/bootstrap.min.js"></script>
    </body>
</html>