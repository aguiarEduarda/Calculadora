<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subtração</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Space Mono', Roboto, 'Open Sans', Arial, Helvetica;
            color: aliceblue;
            background-color: rgb(54, 50, 50);
        }
    </style>  

</head>
<body>
    <div class="container">

        {{-- Início do Cabeçalho --}}
        <div class="row mt-2">
            Cabeçalho
        </div>
        {{-- Final do Cabeçalho --}}

        {{-- Inicio do Corpo --}}
        <div class="row mt-2">
                       
            <div class="row">
                <h1>Calculadora</h1>  
            </div> 

            <div class="row">
                <form method="POST" action="{{ route('subtrair') }}">
                    @csrf
                    {{-- mb : margin-bottom --}}
                    <div class="mb-3">
                      <label for="primeiroValor" class="form-label">Primeiro valor</label>
                      <input style="background-color: rgb(47, 46, 46)" type="number" class="form-control" id="primeiroValor" name="valor1">
                    </div>
                    <div class="mb-3">
                        <label for="segundoValor" class="form-label">Segundo valor</label>
                        <input style="background-color: rgb(47, 46, 46)" type="number" class="form-control" id="segundoValor" name="valor2">
                      </div>                   
                    <button type="submit" class="btn btn-primary">Subtrair</button>
                </form>
            </div>     
            

        </div>
        {{-- Final do Corpo --}}

        {{-- Inicio do Formulário --}}
        <div class="row mt-2">
            Rodapé
        </div>
        {{-- Final do Formulário --}}
    </div>
</body>
</html>