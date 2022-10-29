<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador de cep</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <div class="container">
        <form>
            <div class="form-group">
                <label for="cep">CEP</label>
                <input name="cep" type="text" class="form-control" id="cep" aria-describedby="emailHelp" placeholder="Digite o cep a ser encontrado">
            </div>
            <button type="submit" class="btn btn-primary">Buscar</button>
        </form>
        <?php
        require_once('./curl.php');
        ?>
        <?php if(isset($_GET['cep']) && $_GET['cep']){ ?>
        <h2>Resultado da Pesquisa</h2>
        <p>
        <?php $address = getInfoCep($_GET['cep']); ?>
        <b>CEP: </b> <?php echo $address->cep; ?><br>
        <b>Logradouro: </b> <?php echo $address->logradouro; ?><br>
        <b>Bairro: </b> <?php echo $address->bairro; ?><br>
        <b>Localidade: </b> <?php echo $address->localidade; ?><br>
        <b>UF: </b> <?php echo $address->uf; ?><br>
        </p>
        <?php } ?>
    </div>
</body>
</html>
