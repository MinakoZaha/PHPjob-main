<?php
for($i = 1; $i <= 100; $i++) {
  if ($i % 3 == 0 && $i % 5 == 0) {  //$iが3の倍数かつ5の倍数
    echo "FizzBuzz!<br>";

  } elseif ($i % 3 == 0) {  // $iが3の倍数
    echo "Fizz!<br>";

  } elseif ($i % 5 == 0) {  // $iが5の倍数
    echo "Buzz!<br>";

  } else {  # $iが3の倍数でも5の倍数でもない
    echo $i . "<br>";
  }
}
?>
