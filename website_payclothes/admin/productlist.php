<?php
include "header.php";
include "slider.php";
include "class/brand_class.php";
?>

<?php 
$brand = new brand;
$show_brand = $brand -> show_brand();
?>

<div class="admin-content-right">
<div class="admin-content-right-cartegory_list">
                <h1>Sản phẩm</h1>
                <table>
                    <tr>
                        <th>Stt</th>
                        <th>ID</th>
                        <th>Danh mục</th>
                        <th>Loại sản phẩm</th>
                        <th>Tùy biến</th>
                    </tr>
                    <?php 
                    if($show_brand) {$i=0;
                        while($result = $show_brand->fetch_assoc()) {$i++;
                    ?>
                    <tr>
                        <td><?php echo $i?></td>
                        <td><?php echo $result['brand_id'] ?></td>
                        <td><?php echo $result['cartegory_name'] ?></td>
                        <td><?php echo $result['brand_name'] ?></td>
                        <td><a href="brandedit.php?brand_id=<?php echo $result['brand_id'] ?>">Sửa</a><a href="branddelete.php?brand_id=<?php echo $result['brand_id'] ?>">Xóa</a></td>
                    </tr>
                    <?php 
                        }
                    }
                    ?>
                </table>
            </div>
        </div>
    </section>
    

    <style>
        .admin-content-right-cartegory_list table {
            width: 100%;
            text-align: center;
            margin-top: 20px;
        }
        .admin-content-right-cartegory_list table tr th,td {
            border: 1px solid #ddd;
        }
        table {
            border-collapse: collapse;
        }
    </style>
</body>
</html>