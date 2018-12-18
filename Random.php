<?php


Class Random {

    // Constructor to initialize values
    function __construct() {

    }

    /**
     * Function to integer number
     * @param float $Min Minimal value
     * @param float $Max Maximal value
     * @return float Random int value
     */
    function int($min = false, $max = false) {
        // return random number within range
        if($min && $max) {
            return mt_rand($min, $max);
        }

        // return random number without range
        return mt_rand();
    }

    /**
     * Function to generate floating number
     * @param float $Min Minimal value
     * @param float $Max Maximal value
     * @param int $precision The optional number of decimal digits to round to. default false means not round
     * @return float Random float value
     */
    function float($min = false, $max = false, $precision = false) {
        if($min && $max) {
            $randomfloat = $min + mt_rand() / mt_getrandmax() * ($max - $min);
        } else {
            $randomfloat = mt_rand() / mt_getrandmax();
        }

    	if($precision) {
    		$randomfloat = round($randomfloat, $precision);
        }

    	return $randomfloat;
    }
}
?>
