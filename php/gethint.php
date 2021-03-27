<?php
// Array with names
$file = '../menu.php';


// get the q parameter from URL
$q = $_REQUEST["q"];

// the following line prevents the browser from parsing this as HTML.
header('Content-Type: text/plain');

// get the file contents, assuming the file to be readable (and exist)
$contents = file_get_contents($file);
// escape special characters in the query
$pattern = preg_quote($q, '/');
// finalise the regular expression, matching the whole line
$pattern = "/^.*$pattern.*\$/m";
// search, and store all matching occurences in $matches

if(preg_match_all($pattern, $contents, $matches)){
    for($i=0;$i< count($matches[0]);$i++) {
        
        
            $matches[0][$i] = str_replace(",",'">',$matches[0][$i]);
        
            $matches[0][$i] = '<li><a class="modal-trigger" href="#' . $matches[0][$i] . '</a></li>';
        }

   echo implode("\n", $matches[0]);
   
}
else{
   echo "No matches found";
}
