<?php

require_once 'libraries/TextDiff.php';

$string1 = trim($_POST['string1']);
$string2 = trim($_POST['string2']);

if ($string1 != '' && $string2 != '') {
    $textDiff = new TextDiff($string1, $string2);
    echo $textDiff->htmlDiff();
}

?>
