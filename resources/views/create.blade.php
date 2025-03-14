
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Alta de Llanta</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
            <a class="btn btn-success" href={{ route('llanta.index') }}><i class="material-icons">&#xE147;</i> <span>Listado</span></a>						
            <div class="justify-end ">
                <div class="col ">
                    
                </div>
            </div>
    </nav>

    <div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
                <h3>Agregar Llanta</h3>
                <form action="{{ route('llanta.store') }}" method="get">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="ancho">Ancho Llanta</label>
                        <input type="text" class="form-control" id="anchoLlanta" name="anchoLlanta" required>
                    </div>
                    <div class="form-group">
                        <label for="diametro">Diametro Rin</label>
                        <input type="text" class="form-control" id="diametroRin" name="diametroRin" required>
                    </div>
                    <div class="form-group">
                        <label for="presion">Presion Max</label>
                        <input type="text" class="form-control" id="presionMax" name="presionMax" required>
                    </div>
                    <div class="form-group">
                        <label for="fabricante">Fabricante</label>
                        <input type="text" class="form-control" id="fabricante" name="fabricante" required>
                    </div>
                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <input type="text" class="form-control" id="stock" name="stock" required>
                        <input type="hidden" class="form-control" id="calificacion" name="calificacion" value="0">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Agregar</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
