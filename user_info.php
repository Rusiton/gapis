<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Document</title>
</head>
<body>
  <header>
    <div class="logo"><a href="index.html"><img src="./src/logo_main.png"></a></div>
    <div class="user-info-container">
    <a class="to-userinfo" href="user_info.php"><div class="user-info"><p>Username</p><img src="./src/user_default.png" alt=""></div></a>
    </div>
  </header>

  <div class="left-navigator">
    <div class="gains-display">
      <p style="color: red;">Gastos: $ 349.820</p>
      <p style="color: green;">Ganancias: $ 958.320</p>
    </div>

    <ul class="options-ul">
      <li><a href="verEmpleados.html">Ver empleados</a></li>
      <li><a href="verNotificaciones.html">Notificaciones</a></li>
      <li><a href="verEstadisticas.html">Ver estadísticas</a></li>
    </ul>

    <div class="stock-display">
      <h2>Stock</h2>
      <ul class="stock-ul">
        <li>Item 1: 8,3%</li>
        <li>Item 2: 10,8%</li>
        <li>Item 3: 18,1%</li>
        <li>Item 4: 24,5%</li>
      </ul>
    </div>
  </div>

  <div class="main-content">
    <div class="user-display">
      <div class="user-img">
        <?php
          $userimgsrc = "./src/user_default.png ";
          echo "<img src='".$userimgsrc."' style='width: 50%;'>"
        ?>
      </div>
      <div class="user-data">
        <?php
          $username = "Matías Cardozo";
          $age = 21;
          $role = "Gerente";
          echo "<h2 style='width:100%;'>".$username."</h2>";
          echo "<h3 style='width:100%;'>".$age." años</h3>";
          echo "<h3 style='width:100%;'>".$role."</h3>";
        ?>
      </div>
    </div>
  </div>

  <!-- <div class="canvas-container">
    <canvas id="chart" style="border: 1px solid black;"></canvas>
  </div> -->


  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  <script type="text/javascript" src="canvas.js"></script>
</body>
</html>