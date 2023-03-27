<?php
//include header
 include ('./functions/userfunctions.php');
 include('header.php');
 
 if(isset($_GET['category']))
{
    $category_slug = $_GET['category'];
    $category_data = getSlugActive("categories",$category_slug);
    $category = mysqli_fetch_array($category_data);

    if($category)
    {
            $cid = $category['id'];
            ?>

            <div class="py-5">
                <div class="container">
                    <div class="col-md-12">
                        <h1 class="my-4 font-rubik font-size-20px"> 
                        <a class ="text-decoration-none text-dark" href="index.php">
                            Homepage / 
                            </a>
                            <a class ="text-decoration-none text-dark" href="categories.php">
                            Category 
                            </a>
                            / <?= $category['name'];?></h1>
                            <hr>
                            <div class="container py-5">
                                <div class="row">
                                    <?php
                                    $products = getProductByCategory($cid);
                                    if(mysqli_num_rows($products) > 0) {
                                        foreach($products as $item) {
                                    ?>  <div class="grid-item border" >
                                            <div class="item py-2" style="width:200px">
                                                <div class="product font-rale ">
                                                <a href="productview.php?product=<?= $item['slug'];?>"><img src="uploads/<?= $item['image'];?>" alt="<?= $item['name'];?>" class="img-fluid"></a>
                                                <div class="text-center">
                                                    <h6><?= $item['name'];?></h6>
                                                    <div class="rating text-warning font-size-12">
                                                    <span><i class="fas fa-star"></i></span>
                                                    <span><i class="fas fa-star"></i></span>
                                                    <span><i class="fas fa-star"></i></span>
                                                    <span><i class="fas fa-star"></i></span>
                                                    <span><i class="far fa-star"></i></span>
                                                    </div>
                                                    <div class="price py-2">
                                                    <span>$<?= $item['selling_price'];?></span>
                                                    </div>
                                                    <a href="#" class="btn btn-warning font-size-12">Add to Cart</a>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                        }
                                    }
                                    else {
                                        echo "No records found!";
                                    }
                                    ?>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <?php
    //include footer
    }
    else
    {
        echo "Something went wrong";
    }
}
else
{
    echo "Something went wrong";
}
include ('footer.php');
?>