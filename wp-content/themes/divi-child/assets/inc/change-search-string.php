<?php
/*********************************/
/* Change Search Button Text
/**************************************/

// Add to your child-theme functions.php
add_filter('get_search_form', 'my_search_form_text');
 
function my_search_form_text($text) {
     $text = str_replace('value="Search"', 'value="Click me"', $text); //set as value the text you want
     return $text;
}