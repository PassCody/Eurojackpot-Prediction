<?php
    CLASS Printer {
        private $lottoNumbers = Array(), $superNumbers = Array();
        FUNCTION print($object) {
            $this->lottoNumbers = array_slice($object->getProbabilityLotto(), 0, 5, true);
            $this->superNumbers = array_slice($object->getProbabilitySuper(), 0, 2, true);
            echo("
            <table style=\"border: solid black 1px;\">
                <tr>
            ");
            echo("<th style=\"border: solid black 1px;\">Lotto Zahlen:</th>");
            foreach($this->lottoNumbers as $key => $value) {
                $this->lottoNumbers[$key] = $key;
            }
            sort($this->lottoNumbers);
            foreach($this->lottoNumbers as $key => $value) {
                echo ("<td style=\"border: solid black 1px; width: 22px;text-align: center;\">".$value."</td>");
            }
            echo("
                </tr>
                <tr>
            ");
            echo("<th style=\"border: solid black 1px;\">Super Zahlen:</th>");
            foreach($this->superNumbers as $key => $value) {
                $this->superNumbers[$key] = $key;
            }
            sort($this->superNumbers);
            foreach($this->superNumbers as $key => $value) {
                echo ("<td style=\"border: solid black 1px; width: 22px;text-align: center;\">".$value."</td>");
            }
            echo("
                </tr>
            </table>
            ");
        }
    }
?>