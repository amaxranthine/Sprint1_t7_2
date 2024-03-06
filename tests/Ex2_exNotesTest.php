<?php
class Calificacio {
    public function donarResultat (int $nota) {
        if ($nota >= 60) {
            $resp = "Primera Divisió";
        } else if ($nota >= 45 && $nota <= 59) {
            $resp = "Segona Divisió";
        } else if ($nota >= 33 && $nota <= 44) {
            $resp = "   Tercera Divisió";
        } else if ($nota <= 32) {
            $resp = "Reprovat";
        }
        echo $resp;
    }
}
?>