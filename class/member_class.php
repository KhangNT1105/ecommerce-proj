<?php
include './lib/database.php';
class Member
{
   private $db;
   private $fm;
   public function __construct()
   {
       $this ->db = new Database();
   }
  /*  public function insert_cartegory($danhmuc_ten){
        $query = "INSERT INTO tbl_danhmuc (danhmuc_ten) VALUES ('$danhmuc_ten')";
        $result = $this ->db ->insert($query);
        echo '<script language="javascript">alert("Xử lý thành công!"); window.location="cartegorylist.php";</script>';
        return $result;
    } */
   public function show_member(){
       $query = "SELECT * FROM tbl_member  ORDER BY id DESC ";
       $result = $this -> db ->select($query);
       return $result;
    }
   public function get_member($id){
       $query = "SELECT * FROM tbl_member WHERE id = '$id'";
       $result = $this -> db ->select($query);
       return $result;
    }
   /* public function update_cartegory($danhmuc_ten,$danhmuc_id) {
        $query = "UPDATE tbl_danhmuc SET danhmuc_ten = '$danhmuc_ten' WHERE danhmuc_id = '$danhmuc_id'";
        $result = $this ->db ->update($query);
        echo '<script language="javascript">alert("Xử lý thành công!"); window.location="cartegorylist.php";</script>';
        return $result;
    }
   public function delete_cartegory($danhmuc_id){
       $query = "DELETE  FROM tbl_danhmuc WHERE danhmuc_id = '$danhmuc_id'";
       $result = $this -> db ->delete($query);
       if($result) {$alert = "<span class = 'alert-style'> Delete Thành công</span> "; return $alert;}
       else {$alert = "<span class = 'alert-style'> Delete Thất bại</span>"; return $alert;}
    } */
}
?>