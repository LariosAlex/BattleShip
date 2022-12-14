<html>
<table border=1 style="width:100%; height:100%">
    <?php
    $doBoats = [3, 2, 1, 0];
    $sizeOfTable = 18; //Dimensiones de la partida
    $boats = [];
    for ($doingBoats = 0; $doingBoats <= count($doBoats); $doingBoats++) { //Bucle que recorre TODOS los barcos a crear.
        // doingBoats --> Numero de casillas del barco (posicion en el array)
        for ($d = 0; $d < $doBoats[$doingBoats]; $d++){ //Bucle que recorre los TIPOS de barco a crear, segun las CASILLAS que ocupan. 
            //d = numero de barcos de 
            $newBoat = []; //Creamos el barco
            $posX = 0;
            $posY = 0;
            $posRand = rand(1, 2); //Vertical (1) u horizontal (2) de manera aleatoria
            while(count($newBoat) < ($doingBoats + 1)){
                if ($posRand == 1 & $posY != 0) { //Aumentamos solo una posicion (X - Y)
                    $posX += 1;
                } else if ($posRand == 2 & $posX != 0) {
                    $posY += 1;
                } else {
                    $posX = rand(1, 9);
                    $posY = rand(1, 9);
                }
                $newBoat[] =  [$posX, $posY];

                for ($boat = 0; $boat < count($boats); $boat++) { //Comprobamos que ningun barco ocupa ya esa casilla.
                    for ($box = 0; $box < count($boats[$boat]); $box++) {
                            // X : $boats[$boat][$box][0] 
                            // Y : $boats[$boat][$box][1]
                        if($posX == $boats[$boat][$box][0] && $posY == $boats[$boat][$box][1]){
                            echo "Reinicio Barco - Casilla ocupada";
                            $newBoat = []; //Creamos el barco de 0
                        }else if($posX > $sizeOfTable || $posY > $sizeOfTable){
                            echo "Reinicio Barco - Fuera de margenes";
                            $newBoat = []; //Creamos el barco de 0
                        }
                    }
                }
            }
            $boats[] = $newBoat; //Añadimos el barco nuevo creado
            echo count($boats);
        }
        
    }
    for ($row = 0; $row <= $sizeOfTable; $row++) {
        echo "<tr>";
        for ($col = 0; $col <= $sizeOfTable; $col++) {
            if ($col == 0) {
                echo "<th height='".(100/($sizeOfTable + 1))."%'>" . $row . "</th>";
            } else if ($row == 0) {
                echo "<th height='".(100/($sizeOfTable + 1))."%'>" . $col . "</th>";
            } else {
                echo "<td height='".(100/($sizeOfTable + 1))."%'";
                for ($boat = 0; $boat < count($boats); $boat++) {
                    for ($box = 0; $box < count($boats[$boat]); $box++) {
                        if ($col == $boats[$boat][$box][0] & $row == $boats[$boat][$box][1]) {
                            if (count($boats[$boat]) == 1) {
                                echo "bgcolor='green'";
                            } elseif (count($boats[$boat]) == 2) {
                                echo "bgcolor='blue'";
                            } elseif (count($boats[$boat]) == 3) {
                                echo "bgcolor='yellow'";
                            } else {
                                echo "bgcolor='red'";
                            }
                        }
                    }
                }

                echo "></td>";
            }
        }
        echo "</tr>";
    }
    ?>
</table>

</html>