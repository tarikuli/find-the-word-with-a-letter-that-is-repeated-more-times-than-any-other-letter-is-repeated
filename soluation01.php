<?php

/**
 * Created by Tarikul Jewel.
 * Email: tarikuli@gmail.com
 * Date: 02/05/18
 * Time: 10:16 PM
 * Run from cli like = php -f soluation01.php "Some people feel the rain, while others just get wet."
 */

// Show Input in Consol
echo "Input: " . $inputSentence = $argv[1];
// Remove all character except A-Za-z and space and push sentence to an Array.
$inputSentenceArray = str_word_count(preg_replace('/[^A-Za-z\- ]/', '', $inputSentence), 1);

$intialCount = 0;

foreach ($inputSentenceArray as $words) {
    // Loop in each word count max character.
    $maxCharactersInWord = countMaxCharactersInWord($words);
    
    // Compare max character in each word. 
    if ($maxCharactersInWord > $intialCount) {
        // Put max character count value in intialCount variable.
        $intialCount = $maxCharactersInWord;
        // Put max character count word in word variable.
        $word = $words;
    }
}
// Show Result in Consol
echo PHP_EOL . "Output: " . $word . PHP_EOL;

function countMaxCharactersInWord($value)
{
    // Convert a string to an array for count character in each word. 
    $wordSplit = str_split($value);
    foreach ($wordSplit as $letter) {
        // Initial set each character count value = 1 if same character found again increment  count.
        if (isset($arr[$value][$letter])) {
            $arr[$value][$letter] = $arr[$value][$letter] +1;
        } else {
            $arr[$value][$letter] = 1;
        }
    }
    // Return Max Count value
    return max($arr[$value]);
}
?>