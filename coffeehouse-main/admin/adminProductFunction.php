<?php 

require_once "../products/product.php";

if(isset($_POST['add_product']))
{
    $products = new Product();
    $image = $products->productUpload();
    if($image)
    {
        $product = $products->addProduct($_POST);
        if($product > 0)
        {
            echo "Berhasil";
            header("Location: admin_product.php");
        }
            exit;
    }else
    {
        echo "Gagal";
        exit;
    }
    
}

if(isset($_POST['update_product']))
{
    $products = new Product();
    $product = $products->updtProduct($_POST);
    if($product > 0)
    {
        echo "Berhasil";
        header("Location: admin_product.php");
    }else
    {
        echo "Gagal";
        exit;
    }
}


?>