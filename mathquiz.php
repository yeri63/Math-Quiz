<?php
    # Program: mathquiz.php
    #    Date: 07-May-2020
    #  Author: gerry.walterscheid@gmail.com
    # Descrip: Math Flash cards to practice addition, subtraction, multiplication and division.

    session_start();
    header("Content-type: text/xml");

    $_SESSION['hits'] = 1;
    $_SESSION['num1'] = mt_rand(1,10);
    $_SESSION['num2'] = mt_rand(0,10);
?>
<CiscoIPPhoneMenu>
  <Title>Math Quiz</Title>
  <Prompt>Select a quiz.</Prompt>

  <MenuItem>
    <Name>Addition</Name>
    <URL>http://192.168.3.250/cisco/addquiz.php</URL>
  </MenuItem>

  <MenuItem>
    <Name>Subtraction</Name>
    <URL>http://192.168.3.250/cisco/subquiz.php</URL>
  </MenuItem>

  <MenuItem>
    <Name>Multiplication</Name>
    <URL>http://192.168.3.250/cisco/mulquiz.php</URL>
  </MenuItem>

  <MenuItem>
    <Name>Division</Name>
    <URL>http://192.168.3.250/cisco/divquiz.php</URL>
  </MenuItem>

</CiscoIPPhoneMenu>
