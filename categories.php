<?php
//include header
 include ('./functions/userfunctions.php');
 include('header.php');

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
                    
            </h1>
                <hr>
                    <div class="row">
                        <?php
                            $categories = getAllActive("categories");
                                if(mysqli_num_rows($categories)>0)
                                {
                                    foreach($categories as $item)
                                    {
                                        ?>                                           
                                            <div class="col-md-3 mb-2">
                                                <a href="products.php?category=<?= $item['slug'];?>" class ="text-decoration-none text-dark">
                                                    <div class="card shadow">
                                                        <div class="card-body">
                                                            <img src="uploads/<?= $item['image'];?>" alt="Category Image" class="w-100">
                                                            <h4 class="text-center font-baloo font-size-20px"><?= $item['name'];?></h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>                                           
                                        <?php
                                    }
                                }
                                else
                                {
                                    echo"No records found!";
                                }
                        ?>
                </div>
        </div>
    </div>
</div>
<?php
//include footer
include ('footer.php');
?>