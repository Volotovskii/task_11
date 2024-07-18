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
                <caption>
                    <h3>Таблица истинности логических операций</h3>
                </caption>
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
                    <!-- а and b используются как переменые для вычисления логических операций  -->
                    <?php
                    for ($a = 0; $a <= 1; $a++) {
                        for ($b = 0; $b <= 1; $b++) {
                            echo "<td>$a</td>";
                            echo "<td>$b</td>";
                            echo "<td>" . intval(!$a) . "</td>";
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

         <!-- Гибкое сравнение в PHP -->
        <section class="comparison">
            <table>
                <caption>
                    <h3>Гибкое сравнение в PHP (==)</h3>
                </caption>
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
                    // Массив значений 
                    $values = array(true, false, 1, 0, -1, "1", null, "php");

                    foreach ($values as $x) {
                        echo "<tr>";

                        if (is_bool($x)) {
                            echo "<td>" . ($x ? "<b>true</b>" : "<b>false</b>") . "</td>";
                        } elseif (is_null($x)) {
                            echo "<td>" . "<b>null</b>"  . "</td>";
                        } elseif ($x === "1" ||  $x === "php") {
                            echo "<td>" . (($x === "1") ? '<b>"1"</b>' : (($x === "php") ? '<b>"php"</b>' : $x))  . "</td>";
                        } else {
                            echo "<td>" . "<b>" . strval($x) . "</b>" . "</td>";
                        }

                        foreach ($values as $y) {
                            echo ($x == $y ? '<td style="background-color: #79b367;"><b>true</b></td>' : '<td><b>false</b></td>');
                        }
                        echo "</tr>";
                    }
                    ?>

                </tbody>
            </table>

            <!-- Жесткое сравнение в PHP -->
            <table>
                <caption>
                    <h3>Жесткое сравнение в PHP (===)</h3>
                </caption>
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

                        if (is_bool($x)) {
                            echo "<td>" . ($x ? "<b>true</b>" : "<b>false</b>") . "</td>";
                        } elseif (is_null($x)) {
                            echo "<td>" . "<b>null</b>"  . "</td>";
                        } elseif ($x === "1" ||  $x === "php") {
                            echo "<td>" . (($x === "1") ? '<b>"1"</b>' : (($x === "php") ? '<b>"php"</b>' : $x))  . "</td>";
                        } else {
                            echo "<td>" . "<b>" . strval($x) . "</b>" . "</td>";
                        }

                        foreach ($values as $y) {
                            //  echo "<td>" . ($x === $y ? "true" : "false") . "</td>";
                            echo ($x === $y ? '<td style="background-color: #79b367;"><b>true</b></td>' : '<td><b>false</b></td>');
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