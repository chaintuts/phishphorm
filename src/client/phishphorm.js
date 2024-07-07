/* This script contains code for fetching and validating a BIP39 seed phrase
* Author: Josh McIntyre
*/

// Functions for interacting with the document
function fetchAndValidateSeedPhrase()
{
	var seedPhrase = getSeedPhraseFromDocument();
	
	var validated = validate(seedPhrase);
	
	setValidatedInDocument(validated);
	
}

function getSeedPhraseFromDocument()
{
	var seedPhrase = document.getElementById("seedphrase").value;

	return seedPhrase;
}

function setValidatedInDocument(validated)
{
	document.getElementById("validated").innerHTML = "Valid Seed Phrase: " + validated;
}
