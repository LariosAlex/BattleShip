<html>
   <table border=1 style="width:100%; height:100%">
    <?php
    $fragata = [[1, 1]];
    $submari = [[3, 1], [3,2]];
    $destructor = [[5, 1], [5,2], [5,3]];
    $portavions = [[7, 1], [7,2], [7, 3], [7,4]];

    $portavions2 = [[6,7], [7,7], [8,7], [9,7]];

    $embarcations = [$fragata, $submari, $destructor, $portavions, $portavions2];
    for($i = 0; $i <= 9; $i++) {
            echo "<tr>";
                for($j = 0; $j <= 9; $j++)  {
                        if($j == 0){
                            echo "<th height='10%'>".$i."</th>";
                        }else if($i == 0){
                            echo "<th height='10%'>".$j."</th>";
                        }else{
                            echo "<td height='10%'></td>";
                        }

                }
            echo "</tr>";
        }
    ?>
    </table>
</html>
