<?php
   $input = array("red", "black", "pink", "white");
   array_splice($input, 2);
   print_r($input);
   print_r("<br />");

   $input = array("red", "black", "pink", "white");
   array_splice($input, 1, -1);
   print_r($input);
   print_r("<br />");

   $input = array("red", "black", "pink", "white");
   array_splice($input, 1, count($input), "orange");
   print_r($input);
   print_r("<br />");

   $input = array("red", "black", "pink", "white");
   array_splice($input, -1, 1, array("black", "maroon"));
   print_r($input);
   print_r("<br />");

   $input = array("red", "black", "pink", "white");
   array_splice($input, 3, 0, "purple");
   print_r($input);
   print_r("<br />");

?> 