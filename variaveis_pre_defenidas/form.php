<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form POST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        input{margin: 10px;padding: 10px;}
        .btn{padding: 15px 30px;}
    </style>
</head>
<body>
    <div class="container text-center">
        <div class="row align-items-center">
            <div class="col-sm-12">
                <form action="post.php" method="POST">
                    <input type="text" name="nome" id="nome">
                    <br>
                    <input type="date" name="data" id="data">
                    <br>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>