<?php

function getShoe() {
    //$_POST["budget"] is the user's budget
    $term = $_POST["productType"];
    $key = '52ddafbe3ee659bad97fcce7c53592916a6bfd73';
    $url = 'http://api.zappos.com/Search?term=' .$term. '&key=' .$key;

    $json = file_get_contents($url,0,null,null);
    $json_output = json_decode($json);

    if ($term == "Shoes" && $_POST["budget"] < 39.5) {
        echo "<p align=\"center\">Zappos " .$term. " are expensive. Please enter a higher budget.</p>";
    }

    else if ($term == "Pants" && $_POST["budget"] < 45) {
        echo "<p align=\"center\">Zappos " .$term. " are expensive. Please enter a higher budget.</p>";
    }

    else if ($term == "Tops" && $_POST["budget"] < 58) {
        echo "<p align=\"center\">Zappos " .$term. " are expensive. Please enter a higher budget.</p>";
    }

    else if ($term == "Hand bags" && $_POST["budget"] < 168) {
        echo "<p align=\"center\">Zappos " .$term. " are expensive. Please enter a higher budget.</p>";
    }

    else if ($term == "Hats" && $_POST["budget"] < 42) {
        echo "<p align=\"center\">Zappos " .$term. " are expensive. Please enter a higher budget.</p>";
    }

    else {
        // Print table
        echo "<table align=\"center\" class=\"items\" border=\"1\">
        <tr><td><b>Product Name</b></td><td><b>Product Price</b></td><td><b>Image</b></td></tr>";

        // Traverse through each item
        foreach ($json_output->results as $results) {
            $price = str_replace("$", "", $results->price);
            $image = str_replace("\"", "", $results->thumbnailImageUrl);
            if ($price < $_POST["budget"]) {
                echo "<tr><td>{$results->productName}</td><td>{$results->price}</td> <td><img src=" . $image . "></td></tr>";
            }
        }

        // End table
        echo "</table>";

    }
}

if (isset($_POST["submit"])) {
    getShoe();
}

?>