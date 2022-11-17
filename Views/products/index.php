<h1>index product</h1>
<?php
// print_r($productName) ;
echo "<br/>";

foreach ($product as $key => $value)
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