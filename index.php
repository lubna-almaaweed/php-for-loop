<?PHP
//Q1
echo "QUESTION NUMBER 1" ."\n";
for($x=1; $x<=10; $x++)
{
 if($x< 10)
 {
 echo "$x-";
 }
 else
  {
 echo "$x"."\n";
  }
}
/////////////////////////////////////////////////////////////////////////
//Q2
echo "QUESTION NUMBER 2" ."\n";
$sum = 0;
for($x=1; $x<=30; $x++)
{
$sum +=$x;
}
echo "The sum of the numbers 0 to 30 is $sum"."\n";

/////////////////////////////////////////////////////////////////////////
//Q3
echo "QUESTION NUMBER 3" ."\n";

/////////////////////////////////////////////////////////////////////////
//Q4
echo "QUESTION NUMBER 4" ."\n";

/////////////////////////////////////////////////////////////////////////
//Q5
echo "QUESTION NUMBER 5" ."\n";
$n = 5;
$x = 1;
for($i=1;$i<=$n-1;$i++)
{
 $x*=($i+1); 
}
echo "The factorial of  $n = $x"."\n";

/////////////////////////////////////////////////////////////////////////
//Q6
echo "QUESTION NUMBER 6" ."\n";
function Fibonacci($n)
{
$num1= 0;
$num2= 1;
$counter= 0; while($counter < $n)
{
echo ' '.$num1;
$num3= $num2 + $num1;
$num1= $num2;
$num2= $num3;
$counter= $counter+1;
}
}
//for a pre defined number for Fibonacci.
$n=10; Fibonacci($n);
echo "\n" ;

/////////////////////////////////////////////////////////////////////////
//Q7
echo "QUESTION NUMBER 7" ."\n";
$text="OrangeAcademy";
$search_char="c";
$count="0";
for($x="0"; $x< strlen($text); $x++)
  { 
    if(substr($text,$x,1)==$search_char)
    {
    $count=$count+1;
	 }
  }
echo $count."\n";
/////////////////////////////////////////////////////////////////////////
//Q8
echo "QUESTION NUMBER 8" ."\n";;
<!DOCTYPE html>
<html>
<body>
<table align="left" border="1" cellpadding="3" cellspacing="0">
<?php
for($i=1;$i<=6;$i++)
{
echo "<tr>";
for ($j=1;$j<=5;$j++)
  {
  echo "<td>$i * $j = ".$i*$j."</td>";
  }
  echo "</tr>";
  }
?>
</table>
</body>
</html>

/////////////////////////////////////////////////////////////////////////
//Q9
echo "QUESTION NUMBER 9" ."\n";;
<!DOCTYPE html>
<html>
<head>
<title></title>
<meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″>
</head>
<body>
<h3>Chess Board using Nested For Loop</h3>
<table width=”270px” cellspacing=”0px” cellpadding=”0px” border=”1px”>
<!– cell 270px wide (8 columns x 60px) –>
<?php
for($row=1;$row<=8;$row++)
{
echo “<tr>”;
for($col=1;$col<=8;$col++)
{
$total=$row+$col;
if($total%2==0)
{
echo “<td height=30px width=30px bgcolor=#FFFFFF></td>”;
}
else
{
echo “<td height=30px width=30px bgcolor=#000000></td>”;
}
}
echo “</tr>”;
}
?>
</table>
</body>
</html>
</html>
/////////////////////////////////////////////////////////////////////////
//Q10
echo "QUESTION NUMBER 10" . ."\n";;
echo "<table border =\"1\" style='border-collapse: collapse'>";
	for ($row=1; $row <= 10; $row++) { 
		echo "<tr> \n";
		for ($col=1; $col <= 10; $col++) { 
		   $p = $col * $row;
		   echo "<td>$p</td> \n";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";

/////////////////////////////////////////////////////////////////////////
//Q11
echo "QUESTION NUMBER 11" ."\n";
for ($i = 1; $i <= 100; $i++)
{
  if ( $i%3 == 0 && $i%5 == 0 )
   {
     echo $i . " FizzBuzz"."\n" ;
   }
  else if ( $i%3 == 0 ) 
   {
     echo $i. " Fizz"."\n";
   }
     else if ( $i%5 == 0 ) 
   {
     echo $i. " Buzz"."\n";
   }
     else
   {
     echo $i."\n";
   }
 }

/////////////////////////////////////////////////////////////////////////
//Q12
echo "QUESTION NUMBER 12" ."\n";
$n = 5; 
echo "n = " . $n . "\n";
$count = 1;
for ($i = $n; $i > 0; $i--) 
{
  for ($j = $i; $j < $n + 1; $j++) 
   {
     printf("%4s", $count);
     $count++;
   } 
	echo "\n";
   }

/////////////////////////////////////////////////////////////////////////
//Q13
echo "QUESTION NUMBER 13" ."\n";
 for ($row=0; $row<=7; $row++)
{
  for ($column=0; $column<=7; $column++)
	{
        if ((($column == 1 or $column == 5) and $row != 0) or (($row == 0 or $row == 3) and ($column > 1 and $column < 5)))
            echo "*";    
        else  
            echo " ";     
	}        
  echo "\n";
}

/////////////////////////////////////////////////////////////////////////
//Q14
echo "QUESTION NUMBER 14" ."\n";;
for ($row=0; $row<7; $row++)
{
  for ($column=0; $column<=7; $column++)
	{
      if ($column == 1 or (($row == 0 or $row == 3 or $row == 6) and ($column < 5 and $column > 1)) or ($column == 5 and ($row != 0 and $row != 3 and $row != 6)))
            echo "*";    
        else  
            echo " ";     
	}        
  echo "\n";
/////////////////////////////////////////////////////////////////////////
//Q15
echo "QUESTION NUMBER 15" ."\n";;
for ($row=0; $row<7; $row++)
{
  for ($column=0; $column<=7; $column++)
	{
     if (($column == 1 and ($row != 0 and $row != 6)) or (($row == 0 or $row == 6) and ($column > 1 and $column < 5)) or ($column == 5 and ($row == 1 or $row == 5)))
            echo "*";    
        else  
            echo " ";     
	}        
  echo "\n";
}

/////////////////////////////////////////////////////////////////////////
//Q16
echo "QUESTION NUMBER 16" . "<br>";

/////////////////////////////////////////////////////////////////////////
//Q1
/////////////////////////////////////////////////////////////////////////
?>