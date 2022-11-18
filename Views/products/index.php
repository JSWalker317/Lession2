
    <div  class="wrapper mt-4 container justify-content-center">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">All Product</h2>
                        <a href="create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Product</a>
                    </div>
                    <?php
                    // $s = $this->view($show);
                    

                    // Include config file
                      
                    // Attempt select query execution
                    if($product != null ){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>Product name</th>";
                                        echo "<th>Category</th>";
                                        echo "<th>Image</th>";
                                        echo "<th>Operation</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                    foreach ($product as $key => $value)
                                    {   
                                        // echo $value['id'];
                                        echo "<tr>";
                                        echo "<th>" . $value['id'] . "</th>";
                                        echo "<td>" . $value['product_name'] . "</td>";
                                        echo "<td>" . $value['category_id'] . "</td>";
                                        echo "<td>" . $value['product_image'] . "</td>";
                                        echo "<td>";
                                        $detail = $_REQUEST['detail'] ?? 'detail';
                                        
                                            // href="http://localhost/?controller=product&action=index&id='. $value['id'].$detail.'"
                                            echo '<button onclick="openForm()"  class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></button>';
                                            echo '<a href="http://localhost/?controller=product&action=update&id='. $value['id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                            echo '<a href="http://localhost/?controller=product&action=destroy&id='. $value['id'].'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                         
                                            echo ('
                                                <div class="form-popup rounded border border-primary" id="myForm" 
                                                style="
                                                        display: none; 
                                                        background-color: #fff; 
                                                        color: #000;
                                                        position: fixed;
                                                        top: 50%;
                                                        left: 50%;
                                                        transform: translate(-50%, -50%);
                                                        width: 50%;">
                                                        <div class="card p-4" style="width: 35rem;">
                                                        <img class="card-img-top" src=".../100px180/" alt="Card image cap">
                                                        <div class="card-body">
                                                        <h5 class="card-title">'.$value['product_name'].'</h5>
                                                        <p class="card-text">'.$value['id'].'</p>
                                                        <p class="card-text">'.$value['category_id'].'</p>
                                                        <p class="card-text">'.$value['product_image'].'</p>
                                                        <button  class="btn-primary" onclick="closeForm()">OK</button>
                                                    
                                                        </div>
                                                    </div>
                                                </div>
                        
                                            ');
                                      
                                        echo "</td>";
                                        echo "</tr>";
                                    
                                    }
                                echo "</tbody>";                            
                            echo "</table>";
                                 
                            // Free result set
                      
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }

                 
 
                    // Close connection
                    ?>
                </div>
            </div>        
    </div>

    <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
        document.getElementById("myForm").style.display = "none";
        }
    </script>
