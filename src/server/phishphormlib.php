<?php

/* This file contains code that does basic seed phrase validation
*
* Author: Josh McIntyre
*/

function validate_seedphrase($seedphrase)
{
	// Parse the seed phrase into individual words
	$seed_words = preg_split("/\s+/", $seedphrase);

	// Get the BIP39 wordlist from file
	$lines = file("bip39_words.txt");

	$wordlist = array();
	foreach($lines as $line)
	{
		array_push($wordlist, trim($line));
	}

	/* Perform some basic validation on the seed 
	* This won't do the full BIP39 checksum validation
	* Instead, look for 12-24 words and ensure all appear in the wordlist
	* This is a good enough approximation, and later validation could occur with scripting
	*/
	$seedphrase_valid = true;

	$len = sizeof($seed_words);
	if ($len < 12 or $len > 24)
	{
		$seedphrase_valid = false;
	}

	foreach ($seed_words as $seed_word)
	{
		if (! in_array($seed_word, $wordlist))
		{
			$seedphrase_valid = false;
		}
	}
	
	return $seedphrase_valid;
}
?>
