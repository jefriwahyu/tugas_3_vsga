<?php
    echo "===============CETAK BILANGAN GANJIL GENAP 1-100===============";
    echo "<br />";

    for($i=1;$i<101;$i++){
        if($i % 2 == 0){
            echo "$i adalah Bilangan Genap<br/>";
        }else{
            echo "$i adalah Bilangan Ganjil.<br/>";
        }
        
        echo "";
    };

    
?>