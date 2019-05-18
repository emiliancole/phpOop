<?php
define("STYLE", "stroke:black;fill:none;");

class CircleMatrix {
public $x,$y,$r,$n,$dx,$dy,$style;
function draw($x=10,$y=10,$r=5,$n=5,$dx=20,$dy=20,$style=STYLE) {
for($i=1; $i<=$n; $i++) {
for($j=1; $j<=$n; $j++) {
	$cx=$x+$dx*$i; $cy=$y+$dy*$j;
echo "<circle cx='$cx' cy='$cy' r='$r' style='$style'/>";
    }
//echo "<circle cx='$cx' cy='$cy' r='10' />";
    } 
  }  
}

class EllipseMatrix {
public $x,$y,$rx,$ry,$n,$dx,$dy,$style;
function draw($x=10,$y=10,$rx=5,$ry=10,$n=5,$dx=20,$dy=20,$style=STYLE) {
for($i=1; $i<=$n; $i++) {
for($j=1; $j<=$n; $j++) {
	$cx=$x+$dx*$i; $cy=$y+$dy*$j;
echo "<ellipse cx='$cx' cy='$cy' rx='$rx' ry='$ry' style='$style'/>";
    }
    } 
  }  
}

class RectMatrix {
public $x,$y,$w,$h,$n,$dx,$dy,$style;
function draw($x=10,$y=10,$w=15,$h=20,$n=5,$dx=20,$dy=30,$style=STYLE) {
for($i=1; $i<=$n; $i++) {
for($j=1; $j<=$n; $j++) {
	$x1=$x+$dx*$i; $y1=$y+$dy*$j;
echo "<rect x='$x1' y='$y1' width='$w' height='$h' style='$style'/>";
    }
//echo "";
    } 
  }  
}

class RectRoundMatrix {
public $x,$y,$w,$h,$r,$n,$dx,$dy,$style;
function draw($x=10,$y=10,$w=15,$h=20,$r=5,$n=5,$dx=20,$dy=30,$style=STYLE) {
for($i=1; $i<=$n; $i++) {
for($j=1; $j<=$n; $j++) {
	$x1=$x+$dx*$i; $y1=$y+$dy*$j;
echo "<rect x='$x1' y='$y1' width='$w' height='$h' rx='$r' ry='$r' style='$style'/>";
    }
//echo "";
    } 
  }  
}

class LineMatrix {
public $x1,$y1,$x2,$y2,$n,$dx,$dy,$style;
function draw($x1=10,$y1=10,$x2=15,$y2=20,$n=5,$dx=20,$dy=30,$style=STYLE) {
for($i=1; $i<=$n; $i++) {
for($j=1; $j<=$n; $j++) {
	$xp1=$x1+$dx*$i; $yp1=$y1+$dy*$j;
	$xp2=$x2+$dx*$i; $yp2=$y2+$dy*$j;
echo "<line x1='$xp1' y1='$yp1' x2='$xp2' y2='$yp2' style='$style'/>";
    }
//echo "";
    } 
  }  
}

class ImageMatrix {
public $x,$y,$w,$h,$n,$dx,$dy,$style;
function draw($x=10,$y=10,$w=15,$h=20,$n=5,$dx=20,$dy=30,$style=STYLE) {
for($i=1; $i<=$n; $i++) {
for($j=1; $j<=$n; $j++) {
	$x1=$x+$dx*$i; $y1=$y+$dy*$j;
echo "<image 
xlink:href='https://mdn.mozillademos.org/files/6457/mdn_logo_only_color.png'
x='$x1' y='$y1' width='$w' height='$h' style='$style'/>";
    }
    } 
  }  
}

class TextMatrix {
public $x,$y,$n,$dx,$dy,$style,$text;
function draw($x=10,$y=10,$n=5,$dx=50,$dy=20,$style=STYLE,$text='aaa') {
for($i=1; $i<=$n; $i++) {
for($j=1; $j<=$n; $j++) {
	$cx=$x+$dx*$i; $cy=$y+$dy*$j;
echo "<text x='$cx' y='$cy' style='$style' >$text";
echo "</text>";
    }
    } 
  }  
}

class UseSymbolMatrix {
public $x,$y,$n,$dx,$dy,$style;
function draw($x=10,$y=10,$n=5,$dx=30,$dy=20,$style=STYLE) {
for($i=1; $i<=$n; $i++) {
for($j=1; $j<=$n; $j++) {
	$cx=$x+$dx*$i; $cy=$y+$dy*$j;
echo "<use x='$cx' y='$cy' xlink:href='#myDot' style='$style' />";
    }
    } 
  }  
}

class PathMatrix {
public $x,$y,$n,$dx,$dy,$style;
function draw($x=10,$y=10,$d='M 0 0 l 10 5 l 0 10 z',$n=5,$dx=30,$dy=20,$style=STYLE) {
for($i=1; $i<=$n; $i++) {
for($j=1; $j<=$n; $j++) {
	$cx=$x+$dx*$i; $cy=$y+$dy*$j;
echo "<path d='M $cx $cy l 10 5 l 0 10 z' style='$style' />";
    }
    } 
  }  
}

class PolylineMatrix {
public $x,$y,$n,$dx,$dy,$style;
function draw($x=10,$y=10,$n=5,$dx=10,$dy=20,$style=STYLE) {
for($i=1; $i<=$n; $i++) {
for($j=1; $j<=$n; $j++) {
	$cx=$x+$dx*$i; $cy=$y+$dy*$j;
echo "<path points='$cx,$cy 100,200 50,50' style='$style' />";
    }
    } 
  }  
}

echo "<svg viewBox='0 0 500 500' >";
echo "<symbol id='myDot' width='40' height='40' viewBox=''0 0 40 40' >";
echo "<circle cx='15' cy='15' r='5' />";
echo "</symbol>";

$m=new PathMatrix();
$m->draw();
echo "</svg>";
 ?>
 
 