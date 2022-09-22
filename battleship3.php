<html>
   <table border=1 style="width:100%; height:100%">
    <?php
    $fragata = [[1,2]];
    $submari = [[3,3], [3,4]];
    $destructor = [[5, 1], [5,2], [5,3]];
    $portavions = [[5, 7], [7,7], [6, 7], [4,7]];
    
    $embarcations = [$fragata, $submari, $destructor, $portavions];
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
