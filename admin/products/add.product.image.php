<?php

require '../../includes/init.php';



//$types = $CategoryObj->Categorylist();

$msg = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {


    $name = $_POST['name'];
    $image = $_FILES['image'];



    $arr = explode(".", $image['name']);
    $ext = $arr[count($arr) - 1];

    $name = time() . "." . $ext;

    $product = new Product();

    $product->adminUploadImage($name, $ext);

    if ($image['error'] == UPLOAD_ERR_OK && is_uploaded_file($image['tmp_name'])) {
        move_uploaded_file($image['tmp_name'], "../../includes/images/$name");

        $msg = "Upload Succesful";
//        redirect("profile.php?id=$id");
    }
}
echo $twig->render('admin/products/add.product.image.html.twig', array());
