<?php
include "header.php";
include "slider.php";
include "class/cartegory_class.php";
?>

<?php 
$cartegory = new cartegory;
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cartgory_name = $_POST['cartgory_name'];
    $insert_cartegory = $cartegory ->insert_cartegory($cartgory_name);
}
?>

<div class="admin-content-right">
            <div class="admin-content-right-cartegory_add">
                <h1>Thêm Danh Mục</h1>
                <form action="" method="POST">
                    <input required name ="cartgory_name" type="text" placeholder="Nhập tên danh mục">
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
    
</body>
</html>