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

    public function calculDons($don) {

        $donCalc = (self::percentDon / 100) * $don;

        if($donCalc >= 2000){

            $don = 2000;

        }else{

            $don = $donCalc;

        }

        return $don;
    }

    public function calculWorks($work) {
        if ($work >= 8000) {

            $work = 8000;

        }

        return $work;
    }

    public function calculImpots($work,$don,$revenu) {
        
        $work = Form::calculWorks($work);
        $don = Form::calculDons($don);
        
        $revenuCalc = $revenu - $don - $work;
        $maxRevenu = 15000;

        $taxeBasse = (self::lowTax / 100) * $revenuCalc;


        if ($revenuCalc > $maxRevenu){

            $diff = $revenuCalc - $maxRevenu;

            $taxeHaute = (self::highTax / 100) * $diff;
            $taxeBasse = (self::lowTax / 100) * $maxRevenu;

            $impotFinal = $taxeBasse + $taxeHaute;

        } else {

            $impotFinal = $taxeBasse;

        }

        return $impotFinal;
        
    }
}
    
if(isset($_POST['button'])) {
    $name = $_POST['name'];
    $revenu = $_POST['revenu'];
    $don = $_POST['don'];
    $work = $_POST['work'];

    $impot = new form($name,$revenu,$don,$work);
    echo "<div class='message_box' style='margin:10px 0px;'></div>";
    echo "<p>après réduction des travaux effectués = ". $impot->calculWorks($work). "</p>";
    echo "<p>après réduction des dons effectués = ". $impot->calculDons($don). "</p>";
    echo "<p>Vous devez payer = ". $impot->calculImpots($work,$don,$revenu). " €</p>";
}

