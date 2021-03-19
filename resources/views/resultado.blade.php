<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Blinker:wght@300&display=swap" rel="stylesheet">
    <title>Resultado</title>

    <style>
        body 
        {
            margin: auto;
            font-family: 'Blinker', Roboto, 'Open Sans', Arial, Helvetica;
            color: black;
            background: url('https://i.pinimg.com/originals/3b/9c/fd/3b9cfd0fbdedb970a1d6b009cdce3eea.jpg');
        }
        *{
            margin: 0;
            padding: 0;
        }
        #menu
        {
            width: 100%;
            height: 50px;
            background-color: rgb(198, 229, 231);
        }
        #menu ul
        {
            list-style: none;
            position: relative;
        }
        #menu ul li
        {
            width: 150px;
            float: left;
        }
        #menu a
        {
            padding: 15px; 
            display: block;
            font-size: 15px;
            text-decoration: none;
            text-align: center;
            background-color: rgb(198, 229, 231);
            color: black;
        }
        #menu a:hover{
            background-color: rgb(207, 235, 225);
            color: rgb(26, 25, 25);
        }
        label[for="bot_menu"]
        {
            padding: 5px;
            color: black;
            text-align: center;
            font-size: 30px;
            cursor: pointer;
            width: 40px;
            height: 50px;
        }
        #bot_menu
        {
            display: none;
        }
        label[for="bot_menu"]
        {
            display: none; 
        }
        @media(max-width: 800px)
        {
            
            #bot_menu:checked ~ #menu
            {
                margin-left: 0;
            }
            label[for="bot_menu"]
            {
                display: block; 
            }
            #menu
            {
                margin-top:5px;
                margin-left: -100%;
                transition: all .4s;
            }
            #menu ul li
            {
                width: 100%;
                float: none;
            }
        }
        #result
        {
          position: absolute;  
          top: 50%;
          left: 50%;
          transform: translate(-50%,-50%);
          text-align: center;
        }
        #result span
        {
            font-size: 52px;
            color: black;
            font-weight: lighter; 
        }
        #result p
        {
            font-size: 45px;
            color: rgb(228, 29, 29);  
            font-weight: bold; 
        }
        footer {
            position: absolute;
            bottom: 0;
            background-color: rgb(207, 235, 225);
            color: black;
            width: 100%;
            height: 100px;    
            text-align: center;
            line-height: 100px;
        }
    </style>  

</head>
<body>
    <input type="checkbox" id="bot_menu">
    <label for="bot_menu">&#9776;</label>

    <div class="container">
       <div class="row mt-2" id="menu">
          <ul>
              <li><a href="public">Home</a></li>
              <li><a href="soma">Somar</a></li>
              <li><a href="subtracao">Subtrair</a></li>
              <li><a href="multiplicacao">Multiplicar</a></li>
              <li><a href="divisao">Dividir</a></li>
          </ul>
        </div>
        <div class="row mt-2" id="result">
            <span class="title">O resultado é:</span>
            <p class="subtitle">{{$resultado}}</p>
        </div> 
        <footer>
            Todos os direitos reservados à Maria Eduarda Nascimento Aguiar.
        </footer>
</body>
</html> 