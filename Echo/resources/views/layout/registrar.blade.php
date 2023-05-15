<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Conta</title>

    <style type="text/css">

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{

            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: #2e2e2e;
        }

        section {
            background: #fff;
            padding: 30px 5px;
            border-radius: 10px;
            box-shadow: 5px 5px 15px;
            max-width: 70vw;

        }

        section h1 {
            padding: 40px 10px;
            text-align: center;
        }

        fieldset {
            border: none;

        }

        fieldset:nth-child(2){
            display: flex;

        }

        fieldset:nth-child(4){
            display: flex;
            padding-top: 20px;

        }

        fieldset:nth-child(5){
            display: flex;
            width: 100%;
            padding: 0 10px;

        }

        .container input {
            width: calc(100% - 20px);
            height: 70px;
            border: none;
            background-color: #ededed;
            border-radius: 4px;
            color: #333;
            font-size: 18px;
            font-weight: 700;
            padding: 14px 10px 0 10px;

        }

        .container{
            position: relative;

        }

        .container label {
            text-transform: uppercase;
            font-size: 14px;
            font-weight: 700;
            color: #9d9d9d;
            position: absolute;
            line-height: 70px;
            top: 10px;
            left: 20px;
            user-select: none;
            pointer-events: none;
            transition: 0.5s;

        }

    .container input:focus ~ label,
    .container input:focus ~ label {
        left: 20px;
        top: -10px;
        color: #00acd7;
    }

    #check {
        width: 50%;
        text-transform: uppercase;
        font-size: 14px;
        display: flex;
    }

    #check input {

        width: 25px;
        height: 25px;
        margin: auto 0;
    }

    #check label{
        margin: auto 10px;
        color: #555;
        transition: 0.5s;
    }

    #check input:checked ~ label,
    #check input :valid ~ label{
        color:#00acd7;
    }

    button{
    margin: 40px 0;
    margin-left: 10px;
    width: calc(50% - 10px);
    height: 70px;
    background-color: #00acd7;
    color: #fff;
    font-size: 20px;
    border: none;
    border-radius: 20px;
    cursor: pointer;
    transition: 0.3s linear;

    }

    button:hover {
        opacity: 0.85;
    }

    form a {
        text-decoration: none;
        font-size: 16px;
        color: #555;
        font-weight: 500;
        padding-top: 20px;
        text-transform: uppercase;
        text-align: center;
        display: block;
        font-family: sans-serif;

    }




    </style>
</head>

<body>

<main>
    @yield('main')
</main>
