<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        body{

            background-color: #2e2e2e;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;

        }

        form{
            background-color: #fff;
            border-radius: 10px;
            max-width: 500px;
            padding: 50px 40px;
            box-shadow: 5px 5px 15px;
        }

        form h1{

            text-align: center;
            margin: 48px 0;
            font-size: 36px;
            color: #111;
        }

        .container {
            margin-bottom: 12px;
            position: relative;
        }

        .container input {
            width: 100%;
            height: 70px;
            border: none;
            background-color: #ededed;
            border-radius: 4px;
            color: #333;
            font-size: 18px;
            font-weight: 700;
            padding: 14px 60px 0 10px;
        }

        .label{
            /*transformando o texto deixando todas as letras maiusculo*/

            text-transform: uppercase;
            font-size: 14px;
            font-weight: 700;
            color: #9d9d9d;
            position: absolute;
            line-height: 70px;
            top: 0;
            left: 20px;
            user-select: none;
            pointer-events: none;
        }


        .container input:focus ~ label,
        .container input:focus ~ label{
            left: 10px;
            top: 16px;
            color: #00acd7;

}

button{

    display: block;
    float: right;
    width: 50%;
    height: 70px;
    margin: 40px auto;
    background-color: #00acd7;
    color: #fff;
    font-size: 20px;
    border: none;
    border-radius: 30px;
    cursor: pointer;
    transition: 0.3s linear;
}

button:hover {
    opacity: 0.85;
}

form a {

    clear: both;
    display: block;
    text-align: center;
    text-decoration: none;
    font-size: 16px;
    color: #555;
    font-weight: 500;
    margin-bottom: 8px;
    text-transform: uppercase;

}

form a:hover {

    color: #111;

}


    </style>


<body>
    <main>
        @yield('main')
    </main>
</body>
