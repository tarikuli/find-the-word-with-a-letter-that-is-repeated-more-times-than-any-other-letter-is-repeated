<h1>Problem</h1>
<br>
In some English words, there is a letter that appears more than once. Search through a sample of text to find the word with a letter that is repeated more times than any other letter is repeated in any other word. When there is a tie between two words, choose the word that appeared first in the sample.
<br>
<br>
The text sample will contain only english letters (a-z and A-Z) — separated by any type and any amount of whitespace — and punctuation marks. A letter is considered to be the same letter regardless of whether it appears in uppercase or lowercase. Any punctuation marks should be ignored. So, in particular, contractions, possessives, and hyphenated words count as a single word.
<br><br>
Write either a PHP, Ruby, or Python program, to be executed from the CLI. The program should accept a file path as an argument and return the original text of the winning word — meaning the same capitalization and punctuation marks. So for example, “Blue-collar worker” should return “Blue-collar” and not “blue-collar”, “Bluecollar”, “bluecollar”, or “Blue collar”. The program should be able to handle any character for input, and merely ignore any character that is not a letter. Lastly, the program should not return exceptions or warnings.
<br>
Example1:
<br>
Input: “O Romeo, Romeo, wherefore art thou Romeo?”
<br>
Output: “wherefore”
<br>
Explanation: The letter “e” is repeated three times in the word “wherefore”—and this is more than any other letter is repeated in any other word!
<br><br>
Example2:<br>
Input: “Some people feel the rain, while others just get wet.”
<br>
Output: “people”
<br>
Explanation: Both “people” and “feel” have a letter that is repeated twice within the word. This is a tie—and the first word wins!
<br>

<h1>Solution</h1>
<b>Run from cli like</b>
<h3>php -f soluation.php "Some people feel the rain, while others just get wet."</h3>
