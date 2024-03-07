<?php

require_once("Ex2_exNotes.php");
use PHPUnit\Framework\TestCase;

class NotaTest extends TestCase {
    public function testPrimeraDivisio() {
        $primeraNota = new Calificacio();
        $resultado = $primeraNota->donarResultat(65);
        $this->assertEquals("Primera Divisió", $resultado);
    }

    public function testSegonaDivisio() {
        $segonaNota = new Calificacio();
        $resultado = $segonaNota->donarResultat(46);
        $this->assertEquals("Segona Divisió", $resultado);
    }
    public function testTerceraDivisio() {
        $terceraNota = new Calificacio();
        $resultado = $terceraNota->donarResultat(34);
        $this->assertEquals("Tercera Divisió", $resultado);
    }
    public function testReprovat() {
        $reprovatNota = new Calificacio();
        $resultado = $reprovatNota->donarResultat(29);
        $this->assertEquals("Reprovat", $resultado);
    }

}
?>