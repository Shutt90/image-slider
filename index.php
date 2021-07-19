<?php

$images = [];

function getImages ($variables, $variable) {
    foreach($variables as $variable) {
            array_push($images, $variable);
    }
}

?>

<script>

const imageArray.push = new Array(<?php foreach($images as $image) echo print_r($image . ",") ?>)

</script>