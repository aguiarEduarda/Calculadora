<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link href = "https://fonts.googleapis.com/css2? family = Space + Mono & display = swap" rel = "folha de estilo">

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
         {{-- Cabeçalho --}}
        <div class="row mt-2">
            Cabeçalho
        </div>
        {{-- Corpo --}}
        <div class="row mt-2">
            <div class="row">
                <h1>Calculadora</h1>  
            </div>  
            <div class="row">
                <form>
                    <div class="mb-3">
                      <label for="primeiroValor" class="form-label">Primeiro valor</label>
                      <input style="background-color: rgba(25, 25, 26, 0.671)" type="number" class="form-control" id="primeiroValor">
                    </div>
                    <div class="mb-3">
                        <label for="segundoValor" class="form-label">Segundo valor</label>
                        <input style="background-color: rgba(25, 25, 26, 0.671)" type="number" class="form-control" id="segundoValor">
                      </div>                   
                    <button style="background-color: rgb(46, 117, 184)" type="submit" class="btn btn-primary">Somar</button>
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