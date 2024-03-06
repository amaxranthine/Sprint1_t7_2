<?php
require "Ex2_exNotes.php";
use PHPUnit\Framework\TestCase;

class NotaTest extends TestCase {
    public function testPrimeraDivisio() {
        $primeraNota = new Nota();
        $resultado = $primeraNota->resultadoNota();
        $this->assertEquals("Primera Divisió", $resultado);
    }
     
}
?>