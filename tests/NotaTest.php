<?php

require_once("Ex2_exNotes.php");
//use PHPUnit\Framework\TestCase;

class CalificacioTest extends PHPUnit\Framework\TestCase {
    public function testDonarResultatMajor60() {
        $calificacio = new Calificacio();
        $this->assertEquals("Primera Divisió", $calificacio->donarResultat(65));
    }
    public function testDonarResultatMajor45() {
        $calificacio = new Calificacio();
        $this->assertEquals("Segona Divisió", $calificacio->donarResultat(50));
    }
    public function testTerceraDivisio() {
        $terceraNota = new Nota();
        $resultado = $terceraNota->resultadoNota();
        $this->assertEquals("Tercera Divisió", $resultado);
    }
    public function testReprovat() {
        $reprovatNota = new Nota();
        $resultado = $reprovatNota->resultadoNota();
        $this->assertEquals("Reprovat", $resultado);
    }

}
?>