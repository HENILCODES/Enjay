<?php
include "../../database/connection.php";

if (isset($_REQUEST['Customer_id'])) {
        $customerId = $_REQUEST['Customer_id'];
    
        $deleteReview = "delete from reviews where customer_id = $customerId";
        mysqli_query($conn, $deleteReview);
    
        $deleteOrder = "delete from customer_products where customer_id = $customerId";
        mysqli_query($conn, $deleteOrder);

        $deleteDocument = "delete from document where customers_id = $customerId";
        mysqli_query($conn, $deleteDocument);
    
        $deleteQuery = "delete from customers where id = $customerId";
        $executeDelet = mysqli_query($conn, $deleteQuery);
        if ($executeDelet) {
            header("location: ../../Admin/customer/");
        }
    }
