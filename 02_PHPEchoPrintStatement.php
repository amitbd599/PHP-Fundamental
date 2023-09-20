<!-- Print Message & Variable -->

<?php

// 1)  echo is faster then print

// echo Format
echo "Hello \n";
echo PHP_EOL; // Line Break 
"\n"; // Line Break 
echo "Hello", "PHP"; // Work in echo


// print Format
print "Hello \n";
print PHP_EOL; // Line Break 
"\n"; // Line Break 
print "Hello Print \n";
// print "Hello", "Print"; //! Not Work in print
print "Hello" . "Print";