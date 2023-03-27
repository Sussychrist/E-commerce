<?php
include('../middleware/adminMiddleware.php');
include('includes/header.php');

?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php 
                if(isset($_GET['id']))
                {
                    
                    
                    $id = $_GET['id'];

                    $product = getId("products",$id);
                    
                    if(mysqli_num_rows($product)>0)
                    {
                        $data = mysqli_fetch_array($product);             
                        ?>
                        <div class="card">
                            <div class="card-header">
                                <h4>Edit Product
                                    <a href="products.php" class="btn btn-primary float-end">Back</a>
                                </h4>
                            </div>
                            <div class="card-body">
                                <form action="code.php" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="mb-0">Select Category</label>
                                        <select name ="category_id" class="form-select mb-2" >
                                            <option selected>Select Category</option>
                                            <?php 
                                                $categories = getAll("categories");
                                                if(mysqli_num_rows($categories)>0)
                                                {
                                                    foreach($categories as $item)
                                                   {
                                                    ?>
                                                    <option value="<?=$item['id'] ?>" <?=$data['category_id'] == $item['id']?'selected':''?>><?=$item['name'] ?></option>
                                                    <?php
                                                   }
                                                }
                                                else
                                                {
                                                    echo "No category available";
                                                }
                                                
                                            ?>
                                        </select>
                                    </div>
                                    <input type="hidden" name ="product_id" value="<?=$data['id']; ?>">
                                    <div class="col-md-6">
                                        <label class="mb-0">Name</label>
                                        <input type="text" required name="name" value ="<?=$data['name']; ?>" placeholder="Enter Catetogory name" class=" form-control mb-2">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="mb-0">Slug</label>
                                        <input type="text" required name="slug" value ="<?=$data['slug']; ?>" placeholder="Enter slug" class=" form-control mb-2 mb-2">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="mb-0">Small description</label>
                                        <textarea rows="3" required name="small_description"  placeholder="Enter small description" class=" form-control mb-2"><?=$data['small_description']; ?></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="mb-0">Description</label>
                                        <textarea rows="3" required name="description"  placeholder="Enter description" class=" form-control mb-2"><?=$data['description']; ?></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="mb-0">Original Price</label>
                                        <input type="text" required name="original_price" value ="<?=$data['original_price']; ?>" placeholder="Enter original price" class=" form-control mb-2">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="mb-0">Selling price</label>
                                        <input type="text" required name="selling_price" value ="<?=$data['selling_price']; ?>" placeholder="Enter selling price" class=" form-control mb-2">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="mb-0">Upload Image</label>
                                        <input type="hidden" name="old_image" value="<?= $data['image']; ?>" />
                                        <input type="file" name="image" class=" form-control mb-2">
                                        <label class="mb-0">Current Image</label>
                                        <img src="../uploads/<?= $data['image']; ?>" height="50px" width="50" alt="Product Image" /> 
                                    </div>
                                    <div class ="row">
                                    <div class="col-md-6">
                                            <label class="mb-0">Quantity</label>
                                            <input type="number" required name="qty" value ="<?=$data['qty']; ?>" placeholder="Enter quantity" class=" form-control mb-2">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="mb-0">Status</label> <br>
                                            <input type="checkbox" name="status" <?=$data['status']=='0'?'':'checked'?> >
                                        </div>
                                        <div class="col-md-3">
                                            <label class="mb-0">Trending</label> <br>
                                            <input type="checkbox" name="trending" <?=$data['trending']=='0'?'':'checked'?>>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="mb-0">Meta Title</label>
                                        <input type="text" required name="meta_title" value ="<?=$data['meta_title']; ?>" placeholder="Enter meta title" class=" form-control mb-2">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="mb-0">Meta Description</label>
                                        <textarea rows="3" required name="meta_description" placeholder="Enter meta description" class=" form-control mb-2"><?=$data['meta_description']; ?></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="mb-0">Meta Keywords</label>
                                        <textarea rows="3" required name="meta_keywords" placeholder="Enter meta keywords" class=" form-control mb-2"><?=$data['meta_keywords']; ?></textarea>
                                    </div>
                                    <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary" name="update_product_btn">Update</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                        <?php
                    }
                    else
                    {
                        echo "Product not found for given id";
                    }
                }
                else
                {
                    echo "Id missing from url";
                }

            ?>
        </div>
    </div>
</div>
<?php
include('includes/footer.php');
?> 