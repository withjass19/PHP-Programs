<!DOCTYPE html>
<html>
<head>
    <style>
        .chessboard {
            width: 200px;
            height: 200px;
            border-collapse: collapse;
        }

        .chessboard td {
            width: 25px;
            height: 25px;
            text-align: center;
        }

        .white {
            background-color: white;
        }

        .black {
            background-color: black;
        }
    </style>
</head>
<body>
    <table class="chessboard">
        <?php
        $rows = 8;
        $cols = 8;
        for ($i = 1; $i <= $rows; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $cols; $j++) {
                $class = ($i + $j) % 2 == 0 ? "white" : "black";
                echo "<td class=\"$class\"></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
