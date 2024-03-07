<?php
class Calificacio {
    public function donarResultat(int $nota): string {
        if ($nota >= 60) {
            return "Primera Divisió";
        } else if ($nota >= 45 && $nota <= 59) {
            return "Segona Divisió";
        } else if ($nota >= 33 && $nota <= 44) {
            return "Tercera Divisió";
        } else if ($nota <= 32) {
            return "Reprovat";
        }
    }
}


?>