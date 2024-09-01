<?php
$original = "original";
$revertida = "";
$length = strlen($original);
for ($i = $length - 1; $i >= 0; $i--) {
    $revertida .= $original[$i];
}
echo "String invertida: " . $revertida;
?>