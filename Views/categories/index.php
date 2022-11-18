<div class="container">
    <h2 style="margin-top: 5rem!important;">All Category</h2>

<?php
    // var_dump($product);
    // foreach ($category as $key => $value)
    // {
    //     echo "<br/>";
    //     foreach ($value as $key => $value)
    //     {
    //         echo("{$key}: ");
    //         echo($value);
    //         echo "<br/>";
    //     }
        
    
    // }

    echo '<table class="table table-striped table-bordered">';
    echo '<thead class="thead-dark">';
        echo "<tr>";
            echo "<th>#</th>";
            echo "<th>Category name</th>";
        echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
        foreach ($category as $key => $value)
        {   
            // echo $value['id'];
            echo "<tr>";
            echo "<th>" . $value['id'] . "</th>";
            echo "<td>" . $value['category_name'] . "</td>";
            echo "</tr>";
        
        }
    echo "</tbody>";                            
echo "</table>";

?>
</div>