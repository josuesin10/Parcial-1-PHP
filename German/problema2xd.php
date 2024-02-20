<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
                <div class="customer-support">
                    <div class="content-customer-support">
                        <i class="fa-solid fa-headset"></i>
                    </div>
                </div>
                <div class="container-logo">
                    <h1 style="text-align: center;">12662. C16</h1>
                </div>
                    <table border="1">
                        <tr>
                            <td>Puntos</td>
                            <td colspan="2" style="text-align: center;">16.79</td>
                            <td>Límite de memoria</td>
                            <td>32 MiB</td>
                        </tr>
                        <tr>
                            <td>Límite de tiempo (caso)</td>
                            <td colspan="2" style="text-align: center;">1s</td>
                            <td>Límite de tiempo (total)</td>
                            <td>1m0s</td>
                        </tr>
                        <tr>
                            <td>Tamaño límite de entrada (bytes)</td>
                            <td colspan="2" style="text-align: center;">10 KiB</td>
                        </tr>
                    </table>
                </div>
                
                <div class="container-user">
                    <div class="content-shopping-cart">
                    </div>
                </div>
    </header>
      <h3>Descripcion</h3>
        <p>
        OMIJal se ha encontrado con una variante en el Concurso ACM, pues el numero de programadores que
        conforman un equipo puede variar, entonces modifica tu programa anterior pues ahora deberás preguntar
        el numero de 3 integrantes por equipo, al final indica cuantos equipos puedenformarse y cuantos
        programadores quedan fuera.
        </p>
      <h3>Entrada</h3>
        <p>
        Dos números que representen el número de programadores y el número de programadores por equipo
        </p>
      <h3>Salida</h3>
        <p>
        Salida con el número de equipos formados y los estudiantes sin equipo, escrito exactamente como en el ejemplo
        </p>
      <h3>Ejemplo</h3>
      <tr>
          <th>Entrada</th>
          <th>Salida</th>
      </tr>
      <table border=1>
        <tr>
          <td style="text-align: center;" >
            5 <br> 4
          </td>
          <td>
            Equipos formados: 1 <br>
            Estudiantes sin equipo: 1
          </td>
        </tr>
        <tr>
          <td style="text-align: center;">
            18 <br> 3
          </td>
          <td>
          Equipos formados: 6 <br>
          Estudiantes sin equipo: 0
          </td>
        </tr>
      </table>
      <h3>Resultado xd</h3>
      <p>------------------------------------------------------------------------------------------------------------</p>
      <?php
        $numProgram = readline("Ingrese el número de programadores: ");
        $nuProgramaEqui = 3;
        $numEquipos = floor($numProgram / $nuProgramaEqui);
        $nuProgramaEqui = $numProgram % $nuProgramaEqui;
        echo "Número de equipos formados: " . $nuProgramaEqui . "<br />";
        echo "Programadores sin equipo: " . $numEquipos . "<br />";
?>

</body>
</html>