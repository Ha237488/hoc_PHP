<?php
     $a = 10;
     $b = 5;
     $kq1 = $a + $b;
     echo "Phep cong: $kq1"; 
     $kq2 = $a - $b;
     echo "Phep tru: $kq2"; 
     $kq3 = $a * $b;
     echo "Phep Nhan: $kq3"; 
     $kq4 = $a / $b;
     echo "Phep chia: $kq4"; 
     $kq5 = $a % $b;
     echo "Phep chia du: $kq5"; 

     // su dung phesp toan so sanh 
     $s = "10";
     $ss = $s ===$b;
     echo $ss;

     // phep toan ket hop 
     echo ++$a;

     // toan tu 3 ngoi 

     $gt = $a > $b ? "$a > $b" : ($a == $b ? "$a = $b" : "$a < $b");
     echo $gt;

     // logic
      
     $gt1 = ($a > $b && $s != $a) ? "Thoa dieu kien " : "Khong thoa dieu kien";
     echo $gt1;
?>