<?php
// if (isset($_REQUEST['CUstomer_id'])) {
//     $customer_id = $_REQUEST['CUstomer_id'];

//     $delete_review = "delete from reviews where customer_id = $customer_id";
//     mysqli_query($conn, $delete_review);

//     $delete_order = "delete from customer_products where customer_id = $customer_id";
//     mysqli_query($conn, $delete_order);

//     $delete_query = "delete from customers where id = $customer_id";
//     $execute_delet = mysqli_query($conn, $delete_query);
//     if ($execute_delet) {
//         header("location: ../customer.php");
//     }
// }

if (isset($_REQUEST['Order_id'])) {
    include "db.php";
    $Order_id = $_REQUEST['Order_id'];

    $delete_query = "delete from customer_products where id = $Order_id";
    $execute_delet = mysqli_query($conn, $delete_query);
    if ($execute_delet) {
        header("location: ../orders.php");
    }
}

function deleteRecord($id, $tbName, $Name)
{
    include "db.php";

    if (isset($id)) {
        $Product_id = $id;
        $TableName = $tbName;
        $FildName = $Name;

        $delete_review = "delete from reviews where $FildName = $Product_id";
        mysqli_query($conn, $delete_review);

        $delete_order = "delete from customer_products where $FildName = $Product_id";
        mysqli_query($conn, $delete_order);

        $delete_query = "delete from $TableName where id = $Product_id";
        $execute_delet = mysqli_query($conn, $delete_query);
        if ($execute_delet) {
            header("location: ../index.php");
        }
    }
}

deleteRecord($_REQUEST['Customer_id'], 'customers', 'customer_id');
deleteRecord($_REQUEST['Product_id'], 'products', 'product_id');
