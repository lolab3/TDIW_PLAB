<?php
    if(isset($_SESSION['ID'])){
        $_SESSION['cistella'] = array();
        $_SESSION['total_productes'] = 0;
        $_SESSION['preu_total'] = 0;
    }
    header("Location: http://localhost/TDIW_PLAB/index.php?accio=home");