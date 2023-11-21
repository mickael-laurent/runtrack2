<?php
if (isset($_POST['style'])) {
    $style = $_POST['style'];
    echo '<link rel="stylesheet" type="text/css" href="' . $style . '">';
}
?>