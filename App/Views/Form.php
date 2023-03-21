<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form</title>
</head>
<body>
        <h2>Fomelario</h2>
       <form action="/pessoa/form/save" method="post">
                Nome
                 <input type="text" name="nome">

                 CPF
                 <input type="text" name="cpf">

                 Data de Nascimento
                 <input type="date" name="nasc">

                 <button>Enviar</button>
        </form>
</body>
</html>