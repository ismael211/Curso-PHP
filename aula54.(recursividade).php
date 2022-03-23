<?php

    function recursivo($a) {
        
        if ($a < 100) {
            echo $a."<br>";
            recursivo(++$a);
        }
        
    }

recursivo(0);