<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./styles.css" />

  </head>

  <body>
    <main>
       <section class="truth"> 
        <table>
        <caption><h3>Таблица истинности логических операций</h3></caption>
        <thead>
            <tr>
                <th>A</th>
                <th>B</th>
                <th>!A</th>
                <th>A || B</th>
                <th>A & B</th>
                <th>A xor B</th>
            </tr>
        </thead>

        <tbody>
            
        <?php
        // TODO echo убрать ? тернарный 
      for ($a = 0; $a <= 1; $a++) {
        for ($b = 0; $b <= 1; $b++) {
       //   echo "<tr>";
          echo "<td>$a</td>";
          echo "<td>$b</td>";
          echo "<td>" . intval(!$a) . "</td>"; // Можно через тернарный попробовать 
          echo "<td>" . intval($a || $b) . "</td>";  
          echo "<td>" . intval($a && $b) . "</td>";
          echo "<td>" . intval($a xor $b) . "</td>";
          echo "</tr>";
        }
      }
      ?>
        </tbody>
        </table>
      </section> 
      <!-- // TODO truth -> сравнение  -->
      <section class="truth"> 
        
        <h2>Гибкое сравнение в PHP (==)</h2>
  <table>
    <thead>
      <tr>
        <th></th>
        <th>true</th>
        <th>false</th>
        <th>1</th>
        <th>0</th>
        <th>-1</th>
        <th>"1"</th>
        <th>null</th>
        <th>"php"</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $values = array(true, false, 1, 0, -1, "1", null, "php");

      foreach ($values as $x) {
        echo "<tr>";

        if (is_bool($x)){
            echo "<td>" . ($x ? "true" : "false") . "</td>";
        }elseif (is_null($x)) {
            echo "<td>" . "null"  . "</td>" ; 
          } elseif ($x === "1" || $x === "php") {
           // echo "<td>" . '"1"'  . "</td>" ; 
           // TODO
            echo "<td>" . $x === "1" ? '"1"' : '"php"'  . "</td>" ; 
          }else {
            echo "<td>" . strval($x) . "</td>";
          }
          
        foreach ($values as $y) {
          echo "<td>" . ($x == $y ? "true" : "false") . "</td>";

        }
        echo "</tr>";
      }
      ?>

    </tbody>
  </table>

      </section> 
    </main>

  </body>
</html>
