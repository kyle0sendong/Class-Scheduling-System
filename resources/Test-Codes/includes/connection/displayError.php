<?php 

$title = 'An error has occured';

$output = 'Database error: ' . $e->getMessage() . ' in File: ' . 
            $e->getFile() . '. Line : ' . $e->getLine();

?>  