<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pet</title>

    <style>
        .titulo {
            text-align: center;
            font-family: "Cooper", sans-serif;
            font-size: 8vw; 
            color: #fff;
            text-shadow:
            2px 2px 0px #000,
            -2px -2px 0px #000, 
            2px -2px 0px #000, 
            -2px 2px 0px #000;
            margin-top: 50px;
        }

        .subTitulo {
            text-align: center;
            font-family: "Cooper", sans-serif;
            font-size: 5vw; 
            color: #b85911;
            text-shadow:
            2px 2px 0px #000,
            -2px -2px 0px #000, 
            2px -2px 0px #000, 
            -2px 2px 0px #000;
            margin-top: 50px;
        }
        
        .texto {
            font-size: 2vw;
            color: #000;
            padding-right: 25%;
            padding-left: 25%;
        }

        body {
            background-color: #FAB453;
            margin: 0;
            padding: 0;
        }

        .cadastro {
            background-color: #a8500c;
            text-align: center;
            margin-left: 25%;
            margin-right: 25%;
            border-radius: 20px;
            padding: 20px;
            box-sizing: border-box;
        }

        .subTexto {
            background-color: #fff;
            margin: 10%;
            border-radius: 25px;
            padding: 2%;
        }

        label {
            display: block;
            color: #fff;
            font-size: 1.5rem;
            text-align: left;
            margin: 10px 0;
        }

        input {
            font-size: 2rem;
            padding: 10px;
            margin-bottom: 20px;
            width: 100%;
            box-sizing: border-box;
            border-radius: 10px;
        }

        img {
            flex:1
        }
        
    </style>

</head>
<body>
    <p class="titulo">Cadastro de Pet</p>
    <div class="cadastro">
        <form action="">
            <label for="nome_pet">Nome do pet:</label>
            <input type="text" id="nome_pet" name="nome_pet">

            <label for="idade_pet">Idade do pet:</label>
            <input type="number" id="idade_pet" name="idade_pet">

            <label for="raca_pet">Raça do pet:</label>
            <input type="text" id="raca_pet" name="raca_pet">

            <input type="submit" value="Enviar">
        </form>
    </div>
    <br>
    <div class="subTexto">
        <p class="subTitulo">Animais de Estimação, Saúde Psicológica e Bem-Estar</p>
        <p class="texto">Grande parte das pessoas que têm um animal de estimação considera-os 
            como membros da família. Frequentemente, a ligação de intimidade e afecto que 
            estabelecemos com um animal é tão forte que é difícil expressá-la por palavras.
        </p>
    
        <p class="texto">Na realidade, a Ciência Psicológica já comprovou que, de muitas formas, 
            os animais de estimação podem ajudar-nos a viver com Saúde Psicológica e Bem-Estar. 
            Os animais de estimação, sejam eles cães, gatos, peixes, periquitos ou tartarugas, 
            podem ser uma fonte importante de companhia, conforto, apoio emocional e motivação 
            para os seus donos.
        </p>
    </div>
</body>
</html>
