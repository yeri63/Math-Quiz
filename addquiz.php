<?php
    # Program: addquiz.php
    #    Date: 07-May-2020
    #  Author: gerry.walterscheid@gmail.com
    # Descrip: Math Flash cards to practice addition tables with numbers 0 - 12.

    session_start();
    header("Content-type: text/xml");

    $num1 = $_SESSION['num1'];
    $num2 = $_SESSION['num2'];
    $hits = $_SESSION['hits']++;

    $ans = $num1 + $num2;

    echo "<CiscoIPPhoneText>\n";
    echo "  <Title>Addition</Title>\n";
    echo "  <Text>\n\n";

    if ($hits % 2) 
        echo "   $num1   +   $num2   =   ?"; 
    else
        echo "   $num1   +   $num2   =   $ans"; 
 
    echo "</Text>";

    echo "  <Prompt>";

    if ($hits % 2 == 0) {
        echo "Press for next question.";

        $_SESSION['num1'] = mt_rand(1,10);
        $_SESSION['num2'] = mt_rand(0,10); }

    echo "</Prompt>";
    echo "</CiscoIPPhoneText>";
?>
