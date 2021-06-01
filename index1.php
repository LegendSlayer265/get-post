<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <title>Act_1</title>
</head>

<body>
    <div class="container" id="Formulario">
        <form action="respuesta.php" method="POST">
            <div class="mb-3">
                <div class="form-floating">
                    <input name="nombre" class="form-control" type="text" placeholder="Ingrese su nombre" id="floatingTextarea">
                    <label for="floatingTextarea">Nombres</label>
                </div>
                <br>
                <div class="form-floating">
                    <input name="apellido" class="form-control" type="text" placeholder="Ingrese su apellido" id="floatingTextarea">
                    <label for="floatingTextarea">Apellidos</label>
                </div>
                <br>
                <div class="form-floating">
                    <input name="edad" class="form-control" type="Number" placeholder="Ingrese su edad" id="floatingTextarea">
                    <label for="floatingTextarea">Edad</label>
                </div>
                <br>
                <div class="form-floating">
                    <select class="form-select" id="floatingSelect" placeholder="Seleccione su genero">
                        <option selected>Seleccione su genero</option>
                        <option value="1">Mujer</option>
                        <option value="2">Hombre</option>
                    </select>
                    <label for="floatingSelect">Seleccione su genero</label>
                </div>
                <br>
                <div class="form-floating">
                    <input name="email" type="email" class="form-control" id="floatingInput" placeholder="Ingrese su email">
                    <label for="floatingInput">Email address</label>
                </div>
                <br>
                <div class="form-floating">
                    <input name="numero" class="form-control" type="text" placeholder="Ingrese su numero" id="floatingTextarea" min="0" max="200">
                    <label for="floatingTextarea">Numero</label>
                </div>
                <br>
                <div class="form-floating">
                    <input name="grado" class="form-control" type="text" placeholder="Ingrese su apellido" id="floatingTextarea">
                    <label for="floatingTextarea">grado</label>
                </div>
                <br>
                <div class="mb-3 form-check">
                    <input name="check" type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Acepta T&C</label>
                </div>
                <br>
            <button type="submit" class="btn btn-primary">Ingresar</button>
        </form> 
</div> 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>