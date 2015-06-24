
<?php
//opening php tag
//for each number from 1 - 100 (store in veriable $i) opening foreach tag
foreach(range(1,100) as $i) {
	
//declaring veriable val to store the calculations
// where the number 1-100 is a multiple of 3  print Hello..(then concatinate second condition).. where the number 1-100 is a multiple of 5  print World
  $val = ($i % 3 == 0 ? "Hello" : "").($i % 5 == 0 ? "World" : "");
  // print nothing next to unbers where it is not a multiple of 3 or 5 or both. then "break" to go to next line.
  echo (empty($val) ? $i : $val) .  '<br />';
//closing foreach tag
}


// The percent symbol <%> in PHP is a modulous operator that returns the remainder of a division equation
