<?php

//$question =  " kdmmk4     emme";
//$question = "bjbbebb,   hdvheg";
$question = $_POST['question'];
//$question = "bsb,sbsj?";
// function strip_exc_whitespaces($input){
//     $input = preg_replace('/\s+/', ' ', $input);
//     return trim($input);
// }
// echo "<pre>";
// echo strip_exc_whitespaces($question);
// echo "</pre>";
// echo "<pre>";
// echo $question;
// echo "</pre>";

function spacing_around_punctuation($input){
   $comma = ",";
   $interval = ' ';
     $input = str_replace($comma, "," . $interval, $input);
     return ucfirst(trim($input));
}
echo "<pre>";
echo "Corrected question:" . spacing_around_punctuation($question);
echo "</pre>";

// function correcting_capital_letters($input){
//     return ucfirst($input);  
// }
// echo "<pre>";
// echo correcting_capital_letters($question);
// echo "</pre>";

// function checking_the_question_mark($input){
//  $mark = "?";
//  $marks = $new_mark > 1;
//     $new_mark = str_split($mark);
//  if (count($new_mark) > 1) {
//    str_replace($marks, $mark , $input);
//  }
// }
// echo checking_the_question_mark($question);
// $new_input =str_split($input);
//  $replace = "?";
//  $pattern = [] ;
//  $patterns[0] ='/@/';
//     if ([count($new_input) - 1] > 1) {
//      return preg_replace($patterns, $replace, $input);
//     }