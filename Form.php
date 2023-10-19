<?php

class Form {

    // define const for low taxes and high taxes
    public const lowTax = 15;
    public const highTax = 20;

    public const percentDon = 25;

    private $_name , $_revenu, $_don, $_work;

    public function __construct($name,$revenu,$don,$work)
    {
        $this->_name = (int) $name;
        $this->_revenu = (int) $revenu;
        $this->_don = (int) $don;
        $this->_work = (int) $work;

    }

    // public function inputText($text) {
    //     return (
    //         '<input type="text" name="' . $text . '" value="' . $this->getValue($text) . '">'
    //     );
    // }

    // public function inputNumber($number) {
    //     return (
    //         '<input type="number" name="' . $number . '" value="' . $this->getValue($number) . '">'
    //     );
    // }

    public function submit() {
        return '<button type="submit" name="button" value="button">Calculez</button>';
    }

    public function calculDons($don) {

        $donCalc = (self::percentDon / 100) * $don;

        if($donCalc >= 2000){

            $donCalc = 2000;

        } else {

            $donCalc = $don;

        }

        return $donCalc;
    }

    public function calculWorks($work) {
        //public const maxWorks = 8000;
        if ($work >= 8000) {

            // $workCalc = $this->_revenu - 8000;
            $work = 8000;

        }

        return $work;
    }

    public function calculImpots($work,$don,$revenu) {
        
        Form::calculWorks($work);
        Form::calculDons($don);
        
        $revenuCalc = $revenu - $don - $work;

        if ($revenuCalc > 15000){

            $highTaxCalc = $revenuCalc - 15000;

            $highTax = $highTaxCalc * self::highTax;

        } else {

            $lowTax = $revenuCalc * self::lowTax;

        }
        
    }
}

if(isset($_POST['button'])) {

    $name = $_POST['name'];
    $revenu = $_POST['revenu'];
    $don = $_POST['don'];
    $work = $_POST['work'];

    $impot = new form($name,$revenu,$don,$work);
    echo "<p>après réduction des travaux effectués = ". $impot->calculWorks($work). "</p>";
    echo "<p>après réduction des dons effectués = ". $impot->calculDons($don). "</p>";
}