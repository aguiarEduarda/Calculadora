<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Blinker:wght@300&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Blinker', Roboto, 'Open Sans', Arial, Helvetica;
            color: black;
            background-color: rgb(198, 229, 231);
        }
        *{
            margin: 0;
            padding: 0;
        }
        #menu
        {
            width: 100%;
            height: 52px;
            background-color: rgb(59, 197, 207);
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
            background-color:  rgb(59, 197, 207);
            color: black;
        }
        #menu a:hover{
            background-color: rgb(132, 236, 200);
            color: rgb(26, 25, 25);
        }
    </style>   

</head>
<body>
    <div class="container">
         {{-- Cabeçalho --}}
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
        {{-- Corpo --}}
        <div class="row mt-2">
            <div class="row">
                <h1 >Calculadora Funcional</h1>  
            </div> 

              <div class="row">
                <form method="POST" action="{{ route('somar') }}">
                    @csrf
                    <div class="mb-3">
                      <label for="primeiroValor" class="form-label">Primeiro valor</label>
                      <input type="number" style="background-color:rgb(207, 235, 225)" class="form-control" id="primeiroValor" name="valor1">
                    </div>
                    <div class="mb-3">
                        <label for="segundoValor" class="form-label">Segundo valor</label>
                        <input type="number" style="background-color: rgb(207, 235, 225)" class="form-control" id="segundoValor" name="valor2">
                      </div>                   
                    <button type="submit" class="btn btn-primary">Somar</button>
                  </form>
            </div>
            </div>   

        {{-- Formulário --}}
        <div class="row mt-2">
            Rodapé da págna 
        </div>
    </div>
</body>
</html>