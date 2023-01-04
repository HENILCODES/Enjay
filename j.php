<div class="container my-3">
    <hr>
    <?php
    if (isset($_SESSION['Active_User'])) {
    ?>
        <form class="row g-3" action="PHP/reviewSend.php" method="post">
            <div class="input-group">
                <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
                <input autocomplete="off" required type="text" class="form-control" name="reviews" placeholder="type reviewss hear" id="sname">
                <button type="submit" class="input-group-text fw-bold justify-content-center" name="send">send</button>
            </div>
        </form>
        <hr>
    <?php
    }
    ?>
</div>
<span>Reviewss</span>
<div>
    <div class="container mt-2" style="height: 100px; overflow-y: auto;">
        <?php
        $select_reviews = "SELECT reviews.name,customers.name as customer_name from reviews INNER JOIN customers ON reviews.customer_id = customers.id WHERE product_id='$row[id]' ORDER by reviews.id DESC";
        $execute_select_reviews = mysqli_query($conn, $select_reviews);
        while ($row = mysqli_fetch_array($execute_select_reviews)) {
        ?>
            <div class="box ps-2">
                <span class="badge bg-secondary"><?php echo $row['customer_name']; ?></span>
                <div class="ms-2">
                    <p><?php echo $row['name']; ?></p>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>