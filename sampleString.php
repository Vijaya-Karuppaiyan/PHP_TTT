<?php
echo "Sample String programs <br/>";

$str="Welcomer";
$str1 ='Hello Everyone, How are you?';
echo $str . "<br/>";
echo $str1 . "<br/>";
var_dump($str); echo "<br/>";
var_dump($str1); echo "<br/>";
echo "length of str String = ", strlen($str), "<br/>";
echo " no. of words in str1  String = ", str_word_count($str1), "<br/>"; 


$sentence = "hello everyone, how are you?";
    $i = 0;
    $spaceCount = 0;

    while ($sentence[$i] != "") {
        if ($sentence[$i] == ' ') {
            $spaceCount++;
        }
        $i++;
    }

    $wordCount = $spaceCount + 1;

    echo "Sentence: \"$sentence\"<br>";
    echo "Number of words: $wordCount";

?>
