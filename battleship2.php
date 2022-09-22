<html>
   <table border=1 style="width:100%; height:100%">
    <?php
    $submariH = [[7,3], [7,2]];
    $submariV = [[2,3], [1,3]];
    $embarcations = [$submariV, $submariH];
    for($i = 0; $i <= 9; $i++) {
            echo "<tr>";
                for($j = 0; $j <= 9; $j++)  {
                        if($j == 0){
                            echo "<th height='10%'>".$i."</th>";
                        }else if($i == 0){
                            echo "<th height='10%'>".$j."</th>";
                        }else{
                            echo "<th height='10%'>";
                            foreach($embarcations as $embarcation){
                                foreach($embarcation as $box){
                                    if($box[0] == $i & $box[1] == $j){
                                        echo "X";
                                    }
                                }
                            }
                            echo "</th>";
                        }

                }
            echo "</tr>";
        }
    ?>
    </table>
</html>
