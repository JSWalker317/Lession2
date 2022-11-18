<h1>show category</h1>
<?php
// print_r($productName) ;
echo "<br/>";

    foreach ($category as $key => $value)
    {
        echo "<br/>";
        foreach ($value as $key => $value)
        {
            echo("{$key}: ");
            echo($value);
            echo "<br/>";
        }
    }
?>