<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discusión Ejercicio 1</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
    <link rel="stylesheet" href="./css/table.css">
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
    <main>
<h1>Recorriendo matriz utilizando: Array Asociativos</h1>
 <div id="wrapper">
  <?php 
    // Solución A
    $alumnos = [
        "Ingles" => [
            "Basico" => 25,
            "Intermedio" => 15,
            "Avanzado" => 10
        ],
        "Frances" => [
            "Basico" => 10,
            "Intermedio" => 5,
            "Avanzado" => 2
        ],
        "Mandarin" => [
            "Basico" => 8,
            "Intermedio" => 4,
            "Avanzado" => 1
        ],
        "Ruso" => [
            "Basico" => 12,
            "Intermedio" => 8,
            "Avanzado" => 4
        ],
        "Portugues" => [
            "Basico" => 30,
            "Intermedio" => 15,
            "Avanzado" => 10
        ],
        "Japones" => [
            "Basico" => 90,
            "Intermedio" => 25,
            "Avanzado" => 67
        ]
        ];
        

    $tables="";
    foreach ($alumnos as $key => $value) {
        $rows="";
        foreach ($value as $nivel => $cant) {
            $rows.=<<<EOF
                <tr>
                    <td class="lalign">$nivel</td>
                    <td>$cant</td>
                </tr>
            EOF;
        }
        $tables.=<<<EOF
            <div>
                <h2>Idioma: $key</h2>
                <table id="keywords" cellspacing="0" cellpadding="0">
                <thead>
                <tr>
                    <th><span>Nivel</span></th>
                    <th><span>Cantidad de alumnos</span></th>
                </tr>
                </thead>
                <tbody>
                $rows
                </tbody>
                </table>
            </div>
        EOF;
    }
    $content = <<<EOF
        $tables
    EOF;
    echo $content;
  ?>
 </div> 
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.28.14/js/jquery.tablesorter.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    <script src="https://kit.fontawesome.com/0c7c28094d.js" crossorigin="anonymous"></script>
    <script>
          /* Multiple Item Picker */
  $('.selectpicker').selectpicker({
    style: 'btn-default'
  });
  $(function () {
  $("#datepicker").datepicker({ 
      autoclose: true, 
      todayHighlight: true,
      clearBtn: true
  }).datepicker('update', new Date());
});

 $("#datepicker").keyup(function(e){
   console.log("heool");
   if(e.keyCode ==8 || e.keyCode == 46) {
     $("#datepicker").datepicker('update', "");
   }
 });
    </script>
</body>

</html>