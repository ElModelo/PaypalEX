<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/5.0.0/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>
      <div class="formulario">
        <h2>Pagos con Paypal</h2>
        <?php
          $resultado = $_GET['exito'];
          

          if ($resultado == "true") {
            $paymentId = $_GET['paymentId'];
            echo "el pago se realizo correctamente";
            echo '<br>';

            echo "el ID es {$paymentId}";
          } else {
            echo 'El pago no se realizo';
          }

        ?>
      </div>
  </body>
  
  
</html>