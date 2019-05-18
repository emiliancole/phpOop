<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            echo 'AGGREGATION EXAMPLE<br/>';
echo "object instances created outside aggregator class";

class Tire {}

class Car  
{
    public function __construct(Tire $t1, Tire $t2, Tire $t3, Tire $t4)
    {
        $this->tire1 = $t1;
        $this->tire2 = $t2;
        $this->tire3 = $t3;
        $this->tire4 = $t4;
    }
}

// object instances created outside aggregator class:
$tire1 = new Tire('pirelli');
$tire2 = new Tire();
$tire3 = new Tire();
$tire4 = new Tire();

$suv = new Car($tire1, $tire2, $tire3, $tire4);
#echo $tire1;

        ?>
    </body>
</html>