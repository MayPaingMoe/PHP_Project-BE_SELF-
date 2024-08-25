<?php
function translateToBurmese($phrase) {
    // Define the API endpoint with the full text
    $url = "https://translate.googleapis.com/translate_a/single?client=gtx&sl=en&tl=my&dt=t&q=" . urlencode($phrase);

    // Send the request to the translation service
    $response = file_get_contents($url);
    
    // Check if the response is valid
    if ($response === FALSE) {
        return "Error: Unable to reach the translation service.";
    }

    // Decode the JSON response
    $result = json_decode($response, true);

    // Return the translated text or an error message
    return $result[0][0][0] ?? 'Translation failed';
}

// Example usage
$inputPhrase = 'Hello, World!';

// Translate the input phrase
$translatedPhrase = translateToBurmese($inputPhrase);

// Output the result
echo "The translation is:<br>'$translatedPhrase'";
?>