<!-- Add Product Modal -->
<div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="productModalLabel">Add Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="http://localhost/?controller=product&action=store" method="POST">
        <div class="modal-body">
                <div class="form-group">
                    <label for="">Product Name</label>
                    <input type="text" name="pName" class="form-control" placeholder="Enter Product Name">
                </div>
                <div class="form-group">
                    <label for="">Category Id</label>
                    <input type="text" name="pCategory" class="form-control" placeholder="Enter Category Id">
                </div>
                <div class="form-group">
                    <label for="">Product Image</label>
                    <input type="text" name="pImage" class="form-control" placeholder="Enter Product Image">
                </div>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="save_product" class="btn btn-primary">Save changes</button>
        </div>
      </form>

    </div>
  </div>
</div>
<!-- View Product Modal -->
<div class="modal fade" id="viewProductModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Product Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <div class="form-group">
                    <label for="">Product Name</label>
                    <input type="text" name="pName" id="view_pName" class="form-control" placeholder="Enter Product Name" readonly>
                </div>
                <div class="form-group">
                    <label for="">Id:</label>
                    <input type="text" name="pName" id="view_pId" class="form-control" placeholder="Enter Product Name" readonly>
                </div>
                <div class="form-group">
                    <label for="">Category:</label>
                    <input type="text" name="pName" id="view_pCategory" class="form-control" placeholder="Enter Product Name" readonly>
                </div>
                <div class="form-group">
                    <label for="">Image:</label>
                    <input type="text" name="pName" id="view_pImage" class="form-control" placeholder="Enter Product Name" readonly>
                </div>
        <!-- <div class="product_view_data"> -->
        
            <!-- <div class="card" style="width: 29rem;">
                    <img src="" style="height: 200px;" class="card-img-top" alt="product_image">
                    <div class="card-body">
                        <h5 class="card-title" id="view_pName"></h5>
                        <input type="text" name="pName" id="view_pName" class="form-control" placeholder="Enter Product Name">
                        <p class="card-text" id="view_pId">Id: </p>
                        <p class="card-text" id="view_pCategory">Category: </p>
                        <p class="card-text" id="view_pImage">Image: </p>
                    </div>
            </div> -->
            
        <!-- </div> -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Edit Product Modal -->
<div class="modal fade" id="editProductModal" tabindex="-1" aria-labelledby="editProductModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editProductModal">Edit Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="http://localhost/?controller=product&action=update" method="POST">
        <div class="modal-body">
        
            <input type="hidden" name="pId" id="edit_pId">
            <div class="form-group">
                <label for="">Product Name</label>
                <input type="text" name="pName" id="edit_pName" class="form-control" placeholder="Enter Product Name">
            </div>
            <div class="form-group">
                <label for="">Category Id</label>
                <input type="text" name="pCategory" id="edit_pCategory" class="form-control" placeholder="Enter Category Id">
            </div>
            <div class="form-group">
                <label for="">Product Image</label>
                <input type="text" name="pImage" id="edit_pImage" class="form-control" placeholder="Enter Product Image">
            </div>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="update_product" class="btn btn-primary">Update</button>
        </div>
      </form>

    </div>
  </div>
</div>
<!-- Delete Product Modal -->
<div class="modal fade" id="deleteProductModal" tabindex="-1" aria-labelledby="deleteProductModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteProductModal">Delete Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="http://localhost/?controller=product&action=destroy" method="POST">
        <div class="modal-body">
            <input type="hidden" name="product_id" id="delete_id">
            <h3>Are you sure to delete this product</h3>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="delete_product" class="btn btn-danger">Delete</button>
        </div>
      </form>

    </div>
  </div>
</div>



<div  class="wrapper mt-4 container justify-content-center">
        <div class="row">
            <div class="col-md-12">
                <div class="mt-5 mb-3 clearfix">
                    <h2 class="pull-left">All Product</h2>
                    <!-- <a href="create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Product</a> -->
                    <button type="button" class="btn btn-success pull-right " data-toggle="modal" data-target="#productModal">
                        <i class="fa fa-plus"></i>
                        Add Product
                    </button>
                </div>
                
                <?php
                
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
                                        echo '<th class="product_id">' . $value['id'] . "</th>";
                                        echo "<td>" . $value['product_name'] . "</td>";
                                        echo "<td>" . $value['category_id'] . "</td>";
                                        echo "<td>" . $value['product_image'] . "</td>";
                                        echo "<td>";
                                        
                                        echo '<a class="mr-3 view_btn" title="View Record" ><span class="fa fa-eye"></span></a>';
                                        echo '<a href="" class="mr-3 edit_btn" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                        echo '<a href="" class="delete_btn" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                    
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
<!--  -->

<script>
    $(document).ready(function () {
        $('.view_btn').click(function (e) { 
            e.preventDefault();
            
            var product_id = $(this).closest('tr').find('.product_id').text();
            // console.log(product_id);
            $.ajax({
                type: "POST",
                url: "http://localhost/?controller=product&action=show&id="+product_id,
                data: {
                    // 'checking_viewBtn': true,
                    // 'product_id': product_id,
                },
                success: function (response) {
                    //  console.log(response['1']);
                    $.each(response['0'], function (key, value) { 
                        // console.log(value['id']);
                        $('#view_pId').val(value['id']);
                        $('#view_pName').val(value['product_name']);
                        $('#view_pCategory').val(response['1']);
                        $('#view_pImage').val(value['product_image']);
                    });
                    $('#viewProductModal').modal('show');
                }
            });
            // alert('Click');
        });

        $('.edit_btn').click(function (e) { 
            e.preventDefault();
            
            var product_id = $(this).closest('tr').find('.product_id').text();
            // console.log(product_id);
            $.ajax({
                type: "POST",
                url: "http://localhost/?controller=product&action=show&id="+product_id,
                data: {
                    // 'checking_viewBtn': true,
                    'product_id': product_id,
                },
                success: function (response) {
                    // console.log(response);
                    // $('.product_view_data').html(response);
                    $.each(response['0'], function (key, value) { 
                        // console.log(value['product_name']);
                        $('#edit_pId').val(value['id']);
                        $('#edit_pName').val(value['product_name']);
                        $('#edit_pCategory').val(value['category_id']);
                        $('#edit_pImage').val(value['product_image']);
                    });
                    $('#editProductModal').modal('show');
                }
            });
        });
        // jqclick
        $('.delete_btn').click(function (e) { 
            e.preventDefault();
            var product_id = $(this).closest('tr').find('.product_id').text();
            // console.log(product_id);
            $('#delete_id').val(product_id);
            $('#deleteProductModal').modal('show');
             
        });
    });

</script>

<!--  -->
<!-- <script>
    function openForm() {
        document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
    document.getElementById("myForm").style.display = "none";
    }
</script> -->