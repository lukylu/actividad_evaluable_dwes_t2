<?php

class TriangleGenerator {
    public function generateTriangle(int $altura): string{
        $resultado="";
        for ($fila = 1; $fila <= $altura; $fila++) {
            $resultado = $resultado."<p>";
            $linea = "";
            for ($col = 1; $col <= $altura; $col++) {
                if ($fila == 1 || $fila == $altura || $col == 1 || $col == $altura) {
                    $linea.= "*";
                } else {
                    $linea -= "&nbsp;";
                }
            }
        }
    }
}

?>