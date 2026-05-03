<!DOCTYPE>
<html>
<body>

<?php
    class car{
       
       public $type;
       public $price;
       public $colour;

       function set_details($type, $price, $colour){
        $this->type=$type;
        $this->price=$price;
        $this->colour=$colour;
       }

       function get_details(){
        echo "Type: " .$this->type. "Price: " .$this->price. ".<br>";
       }

    }

    $SUV = new car();
    $SUV->set_details('SUV', '12000000', 'black');
    $SUV->get_details();
?>

</body>
</html>