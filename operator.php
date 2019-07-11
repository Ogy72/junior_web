<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operator Aritmatika</title>
</head>

<body>
<?php
    print "Penjumlahan & Pengurangan <br>";
    printf("6 + 1 = %d <br>",6 + 1);
    printf("6 - 1 = %d <br><br>",6 - 1);

    print "Perkalian dan Pembagian <br>"; 
    printf("6 * 2   = %d <br>",6 * 2);
    print (" 6 / 4  = "); print(6 / 4); print("<br>"); 
    print (" 6 % 4  = "); print(6 % 4); print("<br><br>");

    print "Efek ++ sebagai akhiran <br>"; 
    $x = 77;
    print("x = $x <br>");
    print(2 + $x++); print("<br>");
    print("x = $x <br><br>");
    
    print "Efek ++ sebagai awalan <br>"; 
    $x = 77;
    print("x = $x <br>");
    print(2 + ++$x); print("<br>");
    print("x = $x <br><br>");
    
    print "Contoh operasi dengan -- <br>"; 
    $x = 77;
    print("x = $x <br>");
    $x--;
    print("x = $x <br>");
?> 
</body>
</html>