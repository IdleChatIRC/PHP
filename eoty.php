<style type="text/css">
<!--
body {
        background-color:black;
        color:white;
}
-->
</style>

<?php
$today = getdate();             // Get the current day in an array
$yday = ($today['yday'] +1);       // Extract just the number of days since January 1st current year
$leap = date('L');              // check if its a leap year
$tdl = $leap + 365;             // 365 days in an average year plus 1 day if its a leap year
$dliy = $tdl - $yday;             //Today number of days in the current yearminus number of days since January 1st current year
echo "As of today " . date('l F d, Y, ') . "<br>We currently have " . $dliy . " days left in the year.";
?>
