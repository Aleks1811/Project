<?php

$question = $_POST['question'];

//ВАЖНО РАБОТИ И КАТО ЕДНО!
function correcting_question($input){
   // $comma = ",";
   // $interval = ' ';
   //$input = str_replace($comma, "," . $interval, $input);
    
     //Correcting spacing around punctuation
     $comma_interval = ',' . ' ';

     $input = preg_replace('/\s*,\s*/', $comma_interval, $input);

     //Correcting whitespace
     $input = preg_replace('/\s+/', ' ', $input);

     //Correcting question mark
     $input = preg_replace('/\?+/', '?', $input);

      $mark = '?';
      //$mark = strlen($input) -1; 
        if(!function_exists($mark)) {
          return ucfirst(trim($input)) . $mark;
        }
        
        return ucfirst(trim($input));
}
echo "<pre>";
echo "Submitted question:" . $question;
echo "<br>";
echo "Corrected question:" . correcting_question($question);
echo "</pre>";
