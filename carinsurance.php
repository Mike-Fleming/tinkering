<?php
class CarInsurance {
    public $id;
    public 
    $name;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = 
        $name;
    }
    public function 
    message()
    {
        return "My Car Insurance's ID is " .
            $this->id .
            " and Name is " .
            $this->name .
            "!";
    }
}

$myCarInsurance = new           
CarInsurance("1", "State Farm");
echo 
$myCarInsurance->message(); echo "<br>";

$myCarInsurance = new CarInsurance("2", "Geico");
echo $myCarInsurance->message();

?>

