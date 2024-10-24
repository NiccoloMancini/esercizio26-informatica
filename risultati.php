<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <?php
        $nome = $_GET["nome"];
        $cognome = $_GET["cognome"];
        $data = $_GET["data"];
        $time = $_GET["time"];
        $mezzo = (isset($_GET["mezzo"]) ? $_GET["mezzo"] : "-") ;
        $corsi = (isset($_GET["corso"]) ? $_GET["corso"] : "nessuna attività")
    ?>
    <table style="border-collapse:collapse">
        <tr>
            <th>nome</th>
            <th>cognome</th>
            <th>data di nascita</th>
            <th>ora di arrivo</th>
            <th>mezzo di trasporto</th>
            <th>corso pomeridiano</th>
        </tr>
        <?php
            echo "<tr>";
            echo "<td>$nome</td>";
            echo "<td>$cognome</td>";
            echo "<td>$data</td>";
            echo "<td>$time</td>";
            echo "<td>$mezzo</td>";?>
            <td><?php
            if (isset($_GET["corso"])) {
                foreach($corsi as $corso){
                    echo $corso . " ";
                }
            }else{
                echo $corsi;
            }
               
       ?>
            </td>
            </tr>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>