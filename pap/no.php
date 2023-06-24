<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario Bloqueado</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }

        .container{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: #cecece;
            height: 100svh;
        }

        .flex-card{
            display: flex;
            width: 19rem;
            background-color: orangered;
            padding: 8px;
        }

        .flex-card h1{
            color: #726;
        }

        .low-card{
            margin-top: 2px;
            display: flex;
            width: 19rem;
            background-color: #726;
            padding: 8px;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
            align-items: center;
            justify-content: center;
        }

        .up-card{
            margin-bottom: 2px;
            display: flex;
            width: 19rem;
            background-color: #726;
            padding: 8px;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            align-items: center;
            justify-content: center;
        }
        a, p{
            text-decoration: none;
            color: orangered;
            font-weight: bolder;
        }
    </style>

</head>
<body>

    <div class="container">
        <div class="up-card">
            <p>Error 404 - User not found</p>
        </div>
        <div class="flex-card">
            <h1>Usuário Bloqueado, por favor entre em contacto com o Administrador para rever a sua situação.</h1>

        </div>
        <div class="low-card">
        <p><a href="index.html">Voltar :-( </a> </p>
        </div>
    </div>

</body>
</html>