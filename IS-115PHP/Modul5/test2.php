<html>
    <body>
        <h1>Kryptering og Dekryptering</h1>

        <?php

        //Setningen som skal krypteres vises først.
        $setning= "haaland er overvurdert";
        echo "Setningen før kryptering er :<b> $setning </b>";

        $kryptish = krypter($setning);//kombinerer stringen og funksjonen som skal kryptere.
        $dekryptish = decrypt($kryptish);//kombinerer stringen og funskjonen som skal dekryptere.

        
        function krypter($kryptingsetning) {
            $matrise = str_split($kryptingsetning);// Splitter opp strengen, og fører inn hver bokstav i en index i en array.
        
            $asciiInput = [];//lager en tom variabel for at foreachs resultat med ascii fylles opp med denne variabelen 

            foreach($matrise as $char){
                $krypter = ord($char);// ord funkskjonen gjør ting til ASCII tall.
                $asciiInput[] = (string)$krypter;
            }
            $resultatet = implode('', $asciiInput);
            echo "<br>Den krypterte setningen er: <b>$resultatet</b>"; // Printer den krypterte stringen

        }
        
        function decrypt($dekryptInput){
            
            $asciiInput = [];

            foreach($dekryptInput as $char2){
                $dekrypto = chr($char2);
                $asciiInput[] = (string)$dekrypto;
            }
            $finalresult = implode('', $asciiInput);
            echo "<br> Etter at det blir dekryptrert, resultatet blir slik: " .$finalresult;

            return $finalresult;
        }

        

        ?>

    </body>
</html>