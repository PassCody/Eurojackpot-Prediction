<?php
    CLASS Number{
        PRIVATE $lottonumbers = Array(), $lottospecial = Array(); 
        FUNCTION numberMain() {
            for ($i = 0; $i != 5; $i++) {
                $this->setLottoNumbersI($i);
            }
            for ($i = 0; $i != 2; $i++) {
                $this->setLottoSpecialI($i);
            }
            include_once("./sorter.php");
            $sort = new Sorter();
            $this->setLottoNumbersII($sort->sorter($this->getLottoNumbers(), $this));
            $this->setLottoSpecialII($sort->sorter($this->getLottoSpecial(), $this));
            return $this;
        }

        FUNCTION setLottoNumbersI($Index) {
            $this->lottonumbers[$Index] = rand(1, 50);
        }

        FUNCTION setLottoNumbersII($myArray) {
            $this->lottonumbers = $myArray;
        }

        FUNCTION getLottoNumbers() {
            return $this->lottonumbers;
        }

        FUNCTION setLottoSpecialI($Index) {
            $this->lottospecial[$Index] = rand(1, 12);
        }

        FUNCTION setLottoSpecialII($myArray) {
            $this->lottospecial = $myArray;
        }

        FUNCTION getLottoSpecial() {
            return $this->lottospecial;
        }

    }
?>