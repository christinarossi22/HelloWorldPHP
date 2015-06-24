<?php

foreach(range(1,100) as $i) {
  $val = ($i % 3 == 0 ? "Hello" : "").($i % 5 == 0 ? "World" : "");
  echo (empty($val) ? $i : $val) .  '<br />';
	
}
