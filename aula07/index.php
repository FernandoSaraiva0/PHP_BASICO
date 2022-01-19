<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
    <title>Aula07</title>
</head>
<body>
    <div class="container col-10 dflex">
        <form class="col-6 m-auto mt-5" action="">
            <label for="" class="mb-2">Nome</label>
            <input class="form-control" type="text" name="nome">
            <label for="" class="my-2">Sobrenome</label>
            <input class="form-control" type="text" name="sobrenome">
            <button class="btn btn-primary my-5" type="submit">Enviar</button>
        </form>
        <?php
        if(isset($_GET['nome'], $_GET['sobrenome'])):
            $nome = $_GET['nome'];
            $sobrenome = $_GET['sobrenome'];
        ?>
        <h1><?=$nome." ".$sobrenome?></h1>
        <?php
            endif;

            for($i=1; $i<=4; $i++):
        ?>
        
            <div class="card m-auto mb-5" style="width: 18rem;">
                <img src="https://place-hold.it/<?=$i?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        <?php 
            endfor;
        ?>
            
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
</body>
</html>