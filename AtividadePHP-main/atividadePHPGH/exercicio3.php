<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


<?= $frase ?>
<form action="exercicio3_index.php" method="GET">

    <p> Digite a primeira Letra do seu nome</p>
    <input type="text" name="priLetra"> <br />
    <p> Digite o seu mês de nascimento</p>
    <input type="text" name="mesNascimento"> <br />
    <p> Digite o seu dia de nascimento</p>
    <input type="text" name="diaNascimento"> <br />
    <input type="submit">
</form>

</body>

</html>
