<?php
    CLASS PCVar {
        private $probabilityLotto = Array(0 => 0.00,
        1 => 0.00,
        2 => 0.00,
        3 => 0.00,
        4 => 0.00,
        5 => 0.00,
        6 => 0.00,
        7 => 0.00,
        8 => 0.00,
        9 => 0.00,
        10 => 0.00,
        11 => 0.00,
        12 => 0.00,
        13 => 0.00,
        14 => 0.00,
        15 => 0.00,
        16 => 0.00,
        17 => 0.00,
        18 => 0.00,
        19 => 0.00,
        20 => 0.00,
        21 => 0.00,
        22 => 0.00,
        23 => 0.00,
        24 => 0.00,
        25 => 0.00,
        26 => 0.00,
        27 => 0.00,
        28 => 0.00,
        29 => 0.00,
        30 => 0.00,
        31 => 0.00,
        32 => 0.00,
        33 => 0.00,
        34 => 0.00,
        35 => 0.00,
        36 => 0.00,
        37 => 0.00,
        38 => 0.00,
        39 => 0.00,
        40 => 0.00,
        41 => 0.00,
        42 => 0.00,
        43 => 0.00,
        44 => 0.00,
        45 => 0.00,
        46 => 0.00,
        47 => 0.00,
        48 => 0.00,
        49 => 0.00,
        50 => 0.00);
        private $probabilitySuper = Array(0 => 0.00,
        1 => 0.00,
        2 => 0.00,
        3 => 0.00,
        4 => 0.00,
        5 => 0.00,
        6 => 0.00,
        7 => 0.00,
        8 => 0.00,
        9 => 0.00,
        10 => 0.00,
        11 => 0.00,
        12 => 0.00);

        FUNCTION getProbabilitySuper() {
            return $this->probabilitySuper;
        }
        FUNCTION getProbabilityLotto() {
            return $this->probabilityLotto;
        }

        FUNCTION setProbabilitySuper($value) {
            $this->probabilitySuper[$value] += 0.01;
        }
        FUNCTION setProbabilityLotto($value) {
            $this->probabilityLotto[$value] += 0.01;
        }

        FUNCTION sortProbabilitys() {
            arsort($this->probabilityLotto);
            arsort($this->probabilitySuper);
        }
        
    }
?>