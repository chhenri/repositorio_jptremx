<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Crud PHP</title>
</head>

<body>


    <div class="container col-md-6 offset-md-3">
        <h1>Formulário de cadastro - PHP com MySQL</h1>

        <form action="save.php" method="post">
            <div class="row">
                <div class="col">
                <input type="text" name="nome" id="" class="form-control" placeholder="Digite o seu Nome aqui: ">
                </div>
                <div class="col">
                <input type="text" name="sobrenome" id=""  class="form-control" placeholder="Digite seu sobrenome aqui: ">
                </div> 
                <div class="col">
                <input type="date"  class="form-control" name="date" placeholder="data" id="">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <br>
                <button type="submit" class="btn btn-outline-secondary">Salvar</button>
                </div>
            </div>
        </form>
    </div>
    <?php include 'list.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>