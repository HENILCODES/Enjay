<?php
include "../../database/connection.php";

if (isset($_REQUEST['Customer_id'])) {
        $customer_id = $_REQUEST['Customer_id'];
    
        $delete_review = "delete from reviews where customer_id = $customer_id";
        mysqli_query($conn, $delete_review);
    
        $delete_order = "delete from customer_products where customer_id = $customer_id";
        mysqli_query($conn, $delete_order);

        $delete_order = "delete from document where customers_id = $customer_id";
        mysqli_query($conn, $delete_order);
    
        $delete_query = "delete from customers where id = $customer_id";
        $execute_delet = mysqli_query($conn, $delete_query);
        if ($execute_delet) {
            header("location: ../../customer/");
        }
    }
