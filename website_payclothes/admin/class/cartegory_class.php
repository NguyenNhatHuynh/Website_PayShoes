<?php 
include "database.php";
?>

<?php 

class cartegory {
    private $db;

    public function __construct()
    {
        $this -> db = new Database();
    }
    public function insert_cartegory($cartgory_name) {
        $query = "INSERT INTO tbl_cartegory (cartegory_name) VALUES ('$cartgory_name')";
        $result = $this -> db -> insert($query);
        header('Location: cartegorylist.php');
        // return $result;
    }

    public function show_cartegory() {
        $query = "SELECT * FROM tbl_cartegory ORDER BY cartegory_id DESC";
        $result = $this -> db -> select($query);
        return $result; 
    }

    public function get_cartegory($cartegory_id) {
        $query = "SELECT * FROM tbl_cartegory WHERE cartegory_id = '$cartegory_id'";
        $result = $this -> db -> select($query);
        return $result; 
    }

    public function update_cartegory($cartgory_name, $cartegory_id) {
        $query = "UPDATE tbl_cartegory SET cartegory_name = '$cartgory_name' WHERE cartegory_id = '$cartegory_id' ";
        $result = $this -> db -> update($query);
        header('Location: cartegorylist.php');
        return $result;
    }

    public function delete_cartegory($cartegory_id) {
        $query = "DELETE FROM tbl_cartegory WHERE cartegory_id = '$cartegory_id' ";
        $result = $this -> db -> delete($query);
        header('Location: cartegorylist.php');
        return $result;
    }
}
?>