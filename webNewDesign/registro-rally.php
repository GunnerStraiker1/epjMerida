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
  <script type="text/javascript">

  </script>
</head>
  <body>
    <?php include 'Menu.php'; ?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <h1 style="text-align:center">REGISTRO DE EQUIPOS</h1>
        </div>
      </div>
        <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="myForm" enctype="multipart/form-data">
            <div class="form-group">
              <div class="row">
              <label class="control-label col-sm-2" for="nameTeam" style="text-align:right; font-weight:600; font-size:120%">Nombre del Equipo:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nameTeam" placeholder="Ingresa el nombre de tu equipo" name="teamName" required >
              </div>
            </div>
          </div>
          <div class="form-group">
            <!--Integrante 1  -->
            <div class="row">
                <label class="control-label col-sm-2" for="name1" style="text-align:right; font-weight:600; font-size:120%">Nombre del Capitan:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="name1" placeholder="Nombre Completo" name="name1" required>
                </div>

                <label class="control-label col-sm-2" for="epj1" style="text-align:right; font-weight:600; font-size:120%">Número de Encuentro:</label>
                <div class="col-sm-2">
                  <input type="text" class="form-control" id="epj1" placeholder="Número de Encuentro" name="epj1" required>
                </div>

                <label class="control-label col-sm-2" for="tel1" style="text-align:right; font-weight:600; font-size:120%">Número de Celular:</label>
                <div class="col-sm-2">
                  <input type="text" class="form-control" id="tel1" placeholder="Teléfono" name="tel1" required>
                </div>

                <label class="control-label col-sm-2" for="mail1" style="text-align:right; font-weight:600; font-size:120%">Correo Electronico:</label>
                <div class="col-sm-2">
                  <input type="email" class="form-control" id="mail1" placeholder="example@mail.com" name="mail1" required>
                </div>
            </div>
              <!--Integrante 2  -->
              <div class="row">
                  <label class="control-label col-sm-2" for="name2" style="text-align:right; font-weight:600; font-size:120%">Nombre del Integrante 2:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="name2" placeholder="Nombre Completo" name="name2" required>
                  </div>

                  <label class="control-label col-sm-2" for="epj2" style="text-align:right; font-weight:600; font-size:120%">Número de Encuentro:</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="epj2" placeholder="Número de Encuentro" name="epj2" required>
                  </div>

                  <label class="control-label col-sm-2" for="tel2" style="text-align:right; font-weight:600; font-size:120%">Número de Celular:</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="tel2" placeholder="Teléfono" name="tel2" required>
                  </div>

                  <label class="control-label col-sm-2" for="mail2" style="text-align:right; font-weight:600; font-size:120%">Correo Electronico:</label>
                  <div class="col-sm-2">
                    <input type="email" class="form-control" id="mail2" placeholder="example@mail.com" name="mail2" required>
                  </div>
              </div>
              <!--Integrante 3  -->
              <div class="row">
                  <label class="control-label col-sm-2" for="name3" style="text-align:right; font-weight:600; font-size:120%">Nombre del Integrante 3:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="name3" placeholder="Nombre Completo" name="name3" required>
                  </div>

                  <label class="control-label col-sm-2" for="epj3" style="text-align:right; font-weight:600; font-size:120%">Número de Encuentro:</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="epj3" placeholder="Número de Encuentro" name="epj3" required>
                  </div>

                  <label class="control-label col-sm-2" for="tel3" style="text-align:right; font-weight:600; font-size:120%">Número de Celular:</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="tel3" placeholder="Teléfono" name="tel3" required>
                  </div>

                  <label class="control-label col-sm-2" for="mail3" style="text-align:right; font-weight:600; font-size:120%">Correo Electronico:</label>
                  <div class="col-sm-2">
                    <input type="email" class="form-control" id="mail3" placeholder="example@mail.com" name="mail3" required>
                  </div>
              </div>
              <!--Integrante 4  -->
              <div class="row">
                  <label class="control-label col-sm-2" for="name4" style="text-align:right; font-weight:600; font-size:120%">Nombre del Integrante 4:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="name4" placeholder="Nombre Completo" name="name4" required>
                  </div>

                  <label class="control-label col-sm-2" for="epj4" style="text-align:right; font-weight:600; font-size:120%">Número de Encuentro:</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="epj4" placeholder="Número de Encuentro" name="epj4" required>
                  </div>

                  <label class="control-label col-sm-2" for="tel4" style="text-align:right; font-weight:600; font-size:120%">Número de Celular:</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="tel4" placeholder="Teléfono" name="tel4" required>
                  </div>

                  <label class="control-label col-sm-2" for="mail4" style="text-align:right; font-weight:600; font-size:120%">Correo Electronico:</label>
                  <div class="col-sm-2">
                    <input type="email" class="form-control" id="mail4" placeholder="example@mail.com" name="mail4" required>
                  </div>
              </div>
              <!--Integrante 5  -->
              <div class="row">
                  <label class="control-label col-sm-2" for="name5" style="text-align:right; font-weight:600; font-size:120%">Nombre del Integrante 5:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="name5" placeholder="Nombre Completo" name="name5" required>
                  </div>

                  <label class="control-label col-sm-2 offset-sm-4" for="tel5" style="text-align:right; font-weight:600; font-size:120%">Número de Celular:</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="tel5" placeholder="Teléfono" name="tel5" required>
                  </div>

                  <label class="control-label col-sm-2" for="mail5" style="text-align:right; font-weight:600; font-size:120%">Correo Electronico:</label>
                  <div class="col-sm-2">
                    <input type="email" class="form-control" id="mail5" placeholder="example@mail.com" name="mail5" required>
                  </div>
              </div>
            <!--Fin del grupo de datos  -->
            <div class="row">
              <label for="archivos" class="col-sm-2" style="text-align:right; font-weight:600; font-size:120%">Adjuntar un archivo</label>
              <div class="col-sm-offset-2 col-sm-6">
                <input multiple="true" type="file" id="archivos" name="archivos[]" required>
              </div>
            </div>
            <div class="alert alert-warning text-center " role="alert" id="alert">
              <strong>¡IMPORTANTE! Verifica tus datos antes de enviar</strong>
            </div>
            <div class="row terms">
              <div class="col-sm-12">
                El equipo ha leido los términos, condiciones y reglamento del emprorally y todos lo aceptamos.
                <input  type="checkbox" id="terminos" name="terminos" required>
              </div>
            </div>
            <div class="row" id="cont-button">
              <div class="col-sm-12" style="text-align:center">
                <input type="submit" class="btn btn-secondary btn-lg" value="Enviar" aria-label="Close" name="enviar"">
              </div>
            </div>
          </div>
        </form>
      </div>
  </body>
</html>

<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  //C:\xampp\htdocs\vendor\phpmailer\phpmailer\src
  require '../vendor/phpmailer/phpmailer/src/Exception.php';
  require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
  require '../vendor/phpmailer/phpmailer/src/SMTP.php';

  require '../vendor/autoload.php';

  if (isset($_POST["terminos"])) {
    $host ="ec2-54-235-252-23.compute-1.amazonaws.com";
    $port="5432";
    $dbname="dckm01o8lhgko7";
    $user="tnvihkzysvzqvq";
    $password="53ef5e3bcf79392a4e1002850775d739ee7bee462cb2ede4c070dd833c558ae7";

    //$host $port $dbname $user $password
    $db = pg_connect("postgres://tnvihkzysvzqvq:53ef5e3bcf79392a4e1002850775d739ee7bee462cb2ede4c070dd833c558ae7@ec2-54-235-252-23.compute-1.amazonaws.com:5432/dckm01o8lhgko7");
    if (!$db) {
      echo "Error: ".pg_last_error;
    }
    $teamName = $_POST["teamName"];
    $user1 = array($_POST["name1"],$_POST["tel1"],$_POST["mail1"],$_POST["epj1"]);
    $user2 = array($_POST["name2"],$_POST["tel2"],$_POST["mail2"],$_POST["epj2"]);
    $user3 = array($_POST["name3"],$_POST["tel3"],$_POST["mail3"],$_POST["epj3"]);
    $user4 = array($_POST["name4"],$_POST["tel4"],$_POST["mail4"],$_POST["epj4"]);
    $user5 = array($_POST["name5"],$_POST["tel5"],$_POST["mail5"]);
    // if (isset($_POST["capitan"])) {
    //   $capitan = $_POST["capitan"];
    //   echo "<script>alert('$capitan')</script>";
    // }

    //Metodo para tomar las tematicas de equipo
    $row[0]=null;
    while ($row[0]===null) {
      $number = rand(1,12);
      $sqlGetTematic = "SELECT name FROM tematics WHERE id=" .$number."AND selected=false";
      $rs = pg_query($db, $sqlGetTematic);
      $row = pg_fetch_row($rs);
    }

    $mail = new PHPMailer(true);
    try{
        $mail->isSMTP();
        $mail->Host = 'smtp.sendgrid.net'; //'smtp.office365.com'; //Servidor smtp del correo
        $mail->SMTPAuth = true;
        $mail->Username = 'app100048941@heroku.com'; //Correo electronico del remitente
        $mail->Password = 'a1oxn9ib1425'; //Constraseña del remitente

        $mail->SMTPSecure = 'tls'; //Tipo de seguridad
        $mail->Port = 587; //Puerto del servidor smtp

        //-------------------------------------------------------

        // Datos del Correo

        $mail->SetFrom('victorox100@gmail.com', utf8_decode("Servidor EPJ")); //Correo electronico del remitente y nombre(debe coindidir con el username)
        $mail->AddAddress('pinelojuancarlos@gmail.com', utf8_decode("Juan Carlos Pinelo")); //Correo electronico  y nombre del destinatario
        $mail->addReplyTo(utf8_decode($user1[2]), utf8_decode($user1[0]));

        $mail->isHTML(true);
        $mail->Subject = utf8_decode(utf8_decode("Registro de Equipo EMPRORALLY 2018")); //Asunto del correo electronico
        $mail->Body = utf8_decode(
          'Datos del Equipo: <br>'
          .'<b>Nombre del Equipo: '.utf8_decode($teamName).'</b><br>'
          .'<b>Capitán: </b>'.utf8_decode($user1[0]).', tel: '.utf8_decode($user1[1]).', EPJ: '.utf8_decode($user1[3]).'<br>'
          .'Integrante 2: '.utf8_decode($user2[0]).', tel: '.utf8_decode($user2[1]).', EPJ: '.utf8_decode($user2[3]).'<br>'
          .'Integrante 3: '.utf8_decode($user3[0]).', tel: '.utf8_decode($user3[1]).', EPJ: '.utf8_decode($user3[3]).'<br>'
          .'Integrante 4: '.utf8_decode($user4[0]).', tel: '.utf8_decode($user4[1]).', EPJ: '.utf8_decode($user4[3]).'<br>'
          .'Integrante 5: '.utf8_decode($user5[0]).', tel: '.utf8_decode($user5[1]).'<br>'
          ."<b><i>PROPUESTA DE TEMATICA DE EQUIPO: ".$row[0]."</i></b> <br><br>"
          .'<i>Hola!, soy el servidor EPJ, te recuerdo enviar un mensaje de Confirmación al Capitán del equipo mencionando su temática</i>');

          foreach ($_FILES["archivos"]["name"] as $k => $v) {
            $mail->AddAttachment( $_FILES["archivos"]["tmp_name"][$k],'Uploaded file.jpg' );
          }
        //Envio del mail

        $mail->send();

        //Insertar Equipo en DB
        $sqlCreateTeam = "INSERT INTO teams (teamname, tematic) VALUES ('".$teamName."','".$row[0]."')";
        pg_query($db, $sqlCreateTeam);

        //Obtener Id de Equipo para participantes
        $sqlGetTeam= "SELECT id FROM teams WHERE tematic='".$row[0]."'";
        $resultGetTeam = pg_query($db,$sqlGetTeam);
        $rowTeam = pg_fetch_row($resultGetTeam);

        //Integrar participantes a equipos con $rowTeam[0]
        $sqlUser1 = "INSERT INTO participants (idteam,name,epj,email,phone,iscapitain) VALUES (".$rowTeam[0].",'".$user1[0]."','".$user1[3]."','".$user1[2]."','".$user1[1]."','true')";
        $sqlUser2 = "INSERT INTO participants (idteam,name,epj,email,phone,iscapitain) VALUES (".$rowTeam[0].",'".$user2[0]."','".$user2[3]."','".$user2[2]."','".$user2[1]."','false')";
        $sqlUser3 = "INSERT INTO participants (idteam,name,epj,email,phone,iscapitain) VALUES (".$rowTeam[0].",'".$user3[0]."','".$user3[3]."','".$user3[2]."','".$user3[1]."','false')";
        $sqlUser4 = "INSERT INTO participants (idteam,name,epj,email,phone,iscapitain) VALUES (".$rowTeam[0].",'".$user4[0]."','".$user4[3]."','".$user4[2]."','".$user4[1]."','false')";
        $sqlUser5 = "INSERT INTO participants (idteam,name,email,phone,iscapitain) VALUES (".$rowTeam[0].",'".$user5[0]."','".$user5[2]."','".$user5[1]."','false')";
        pg_query($db, $sqlUser1);
        pg_query($db, $sqlUser2);
        pg_query($db, $sqlUser3);
        pg_query($db, $sqlUser4);
        pg_query($db, $sqlUser5);

        //Cambiar estado de los equipos
        $sqlChangeEstado = "UPDATE tematics SET selected=true WHERE name='".$row[0]."'";
        pg_query($db, $sqlChangeEstado);


        pg_close($db);
        echo '<script>
        alert("Se ha enviado de forma correcta su mensaje");
        window.location.replace("Home.php")
            </script>';

    }catch(Exception $e){
        echo '<script>
        alert("ERROR: El mensaje no se ha enviado");
        window.location.replace("Home.php");
        </script>';

    }


  }
 ?>
