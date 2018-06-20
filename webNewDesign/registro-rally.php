<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/Menu.css">
  <link rel="stylesheet" href="../css/rally.css">
  <link rel="shortcut icon" href="../img/favicon.ico">
  <title>EPJ Mérida</title>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</head>
  <body>
    <?php include 'Menu.php'; ?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <h1 style="text-align:center">REGISTRO DE EQUIPOS</h1>
        </div>
      </div>
        <form class="form-horizontal" action="" method="post">
            <div class="form-group">
              <div class="row">
              <label class="control-label col-sm-2" for="nameTeam" style="text-align:right; font-weight:600; font-size:120%">Nombre del Equipo:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nameTeam" placeholder="Ingresa el nombre de tu equipo">
              </div>
            </div>
          </div>
          <div class="form-group">
            <!--Integrante 1  -->
            <div class="row">
                <label class="control-label col-sm-2" for="name1" style="text-align:right; font-weight:600; font-size:120%">Nombre del Integrante 1:</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="name1" placeholder="Nombre Completo">
                </div>

                <div class="col-sm-offset-10 col-sm-2">
                  <div class="checkbox">
                    <label><input type="radio" name="capitan"> Capitán</label>
                  </div>
                </div>

                <label class="control-label col-sm-2" for="epj1" style="text-align:right; font-weight:600; font-size:120%">Número de Encuentro:</label>
                <div class="col-sm-2">
                  <input type="text" class="form-control" id="epj1" placeholder="Número de Encuentro">
                </div>

                <label class="control-label col-sm-2" for="tel1" style="text-align:right; font-weight:600; font-size:120%">Número de Celular:</label>
                <div class="col-sm-2">
                  <input type="text" class="form-control" id="tel1" placeholder="Teléfono">
                </div>

                <label class="control-label col-sm-2" for="mail1" style="text-align:right; font-weight:600; font-size:120%">Correo Electronico:</label>
                <div class="col-sm-2">
                  <input type="email" class="form-control" id="mail1" placeholder="example@mail.com">
                </div>
            </div>
              <!--Integrante 2  -->
              <div class="row">
                  <label class="control-label col-sm-2" for="name2" style="text-align:right; font-weight:600; font-size:120%">Nombre del Integrante 2:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="name2" placeholder="Nombre Completo">
                  </div>

                  <div class="col-sm-offset-10 col-sm-2">
                    <div class="checkbox">
                      <label><input type="radio" name="capitan"> Capitán</label>
                    </div>
                  </div>

                  <label class="control-label col-sm-2" for="epj2" style="text-align:right; font-weight:600; font-size:120%">Número de Encuentro:</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="epj2" placeholder="Número de Encuentro">
                  </div>

                  <label class="control-label col-sm-2" for="tel2" style="text-align:right; font-weight:600; font-size:120%">Número de Celular:</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="tel2" placeholder="Teléfono">
                  </div>

                  <label class="control-label col-sm-2" for="mail2" style="text-align:right; font-weight:600; font-size:120%">Correo Electronico:</label>
                  <div class="col-sm-2">
                    <input type="email" class="form-control" id="mail2" placeholder="example@mail.com">
                  </div>
              </div>
              <!--Integrante 3  -->
              <div class="row">
                  <label class="control-label col-sm-2" for="name3" style="text-align:right; font-weight:600; font-size:120%">Nombre del Integrante 3:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="name3" placeholder="Nombre Completo">
                  </div>

                  <div class="col-sm-offset-10 col-sm-2">
                    <div class="checkbox">
                      <label><input type="radio" name="capitan"> Capitán</label>
                    </div>
                  </div>

                  <label class="control-label col-sm-2" for="epj3" style="text-align:right; font-weight:600; font-size:120%">Número de Encuentro:</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="epj3" placeholder="Número de Encuentro">
                  </div>

                  <label class="control-label col-sm-2" for="tel3" style="text-align:right; font-weight:600; font-size:120%">Número de Celular:</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="tel3" placeholder="Teléfono">
                  </div>

                  <label class="control-label col-sm-2" for="mail3" style="text-align:right; font-weight:600; font-size:120%">Correo Electronico:</label>
                  <div class="col-sm-2">
                    <input type="email" class="form-control" id="mail3" placeholder="example@mail.com">
                  </div>
              </div>
              <!--Integrante 4  -->
              <div class="row">
                  <label class="control-label col-sm-2" for="name4" style="text-align:right; font-weight:600; font-size:120%">Nombre del Integrante 4:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="name4" placeholder="Nombre Completo">
                  </div>

                  <div class="col-sm-offset-10 col-sm-2">
                    <div class="checkbox">
                      <label><input type="radio" name="capitan"> Capitán</label>
                    </div>
                  </div>

                  <label class="control-label col-sm-2" for="epj4" style="text-align:right; font-weight:600; font-size:120%">Número de Encuentro:</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="epj4" placeholder="Número de Encuentro">
                  </div>

                  <label class="control-label col-sm-2" for="tel4" style="text-align:right; font-weight:600; font-size:120%">Número de Celular:</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="tel4" placeholder="Teléfono">
                  </div>

                  <label class="control-label col-sm-2" for="mail4" style="text-align:right; font-weight:600; font-size:120%">Correo Electronico:</label>
                  <div class="col-sm-2">
                    <input type="email" class="form-control" id="mail4" placeholder="example@mail.com">
                  </div>
              </div>
              <!--Integrante 5  -->
              <div class="row">
                  <label class="control-label col-sm-2" for="name5" style="text-align:right; font-weight:600; font-size:120%">Nombre del Integrante 5:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="name5" placeholder="Nombre Completo">
                  </div>

                  <div class="col-sm-offset-10 col-sm-2">
                    <div class="checkbox">
                      <label><input type="radio" name="capitan"> Capitán</label>
                    </div>
                  </div>

                  <label class="control-label col-sm-2" for="epj5" style="text-align:right; font-weight:600; font-size:120%">Número de Encuentro:</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="epj5" placeholder="Número de Encuentro">
                  </div>

                  <label class="control-label col-sm-2" for="tel5" style="text-align:right; font-weight:600; font-size:120%">Número de Celular:</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="tel5" placeholder="Teléfono">
                  </div>

                  <label class="control-label col-sm-2" for="mail5" style="text-align:right; font-weight:600; font-size:120%">Correo Electronico:</label>
                  <div class="col-sm-2">
                    <input type="email" class="form-control" id="mail5" placeholder="example@mail.com">
                  </div>
              </div>
            <!--Fin del grupo de datos  -->
          </div>
        </div>
        </form>
      </div>
  </body>
</html>
