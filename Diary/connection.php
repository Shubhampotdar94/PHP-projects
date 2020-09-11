<?php

    $link = mysqli_connect("localhost:3307","root","","mydiary");
        
        if (mysqli_connect_error()) {
            
            die ("Database Connection Error");
            
        }

?>