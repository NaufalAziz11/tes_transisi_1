<?php
// nomor(1)

// nomor (2)
$input = $_POST["input"];

$key = array(
    'DFHKNQ' => 'EDKGSK',
    'dfhknq' => 'edkgsk'
);
$output = str_replace(array_keys($key), $key, $input);
echo $output;
?>

<form action="" method="post">
    <input type="text" name="input">
    <input type="submit" value="submit" />
</form>