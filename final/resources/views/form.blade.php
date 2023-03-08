<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./estilos.css">
    <title>Document</title>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <h4>Ejercito Argentino</h4>
        <a class="navbar-brand" href="">eliminar licencia</a>
        <a class="navbar-brand" href="listado.php">Modificar licencia</a>
    </nav>
    </header>
    <h1>Carga de licencias</h1>
    <div id="formulario" class="container card">
        <div class="form-group row">
            <form id="form">
                <div class="card-header text-center">
                    <h4>Ingrese los datos solicitados</h4>
                </div>
                <fieldset class="card-body">
                    <div class="form-group col-md-6">
                        <label for="">Provincia donde pasara la licencia</label>
                    </div>
                    <div class="form-group col-md-6">
                        <select name="" id="" class="form-control">
                            <option value="">Seleccionar</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                            <option value="">5</option>
                            <option value="">6</option>
                            <option value="">7</option>
                            <option value="">8</option>
                            <option value="">9</option>
                            <option value="">10</option>
                            <option value="">11</option>
                            <option value="">12</option>
                            <option value="">13</option>
                            <option value="">14</option>
                            <option value="">15</option>
                            <option value="">16</option>
                            <option value="">17</option>
                            <option value="">18</option>
                            <option value="">19</option>
                            <option value="">20</option>
                            <option value="">21</option>
                            <option value="">22</option>
                            <option value="">23</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Dni</label>
                        <input type="number" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Fecha de inicio de la licencia</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">fecha del final de la licencia</label>
                        <input type="date" class="form-control">
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label for="">Localidad</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Direccion</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Orden del día</label>
                        <input type="text" class="form-control">
                    </div>
                    <br>
                    <div class="form-group col-md-6">
                        <button type="submit" class="form-control btn btn-primary">Cargar licencia</button>
                    </div>
                </fieldset>
                <div class="card-footer">
                </div>
            </form>
        </div>
    </div>









    
</body>
</html>