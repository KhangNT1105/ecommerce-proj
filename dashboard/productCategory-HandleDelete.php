<?php
include './config.php';
  if(isset($_POST['btnDelete'])) {
    $k= $_POST['btnDelete'];
       if ($k !='')
        {
            $sql ='delete from product_categories where pro_cate_id =?';
            $arr =[$k];
            $objStatement =$objPDO->prepare($sql);
            $objStatement->execute($arr);
            // $n = $objStatement->rowCount();
          //  echo "Da xoa $n cuon sach";
            header('Location:productCategoryManagement.php');

        }
  }
  //   if(isset($_POST['btnUpdate'])) {
  //   $k= $_POST['btnUpdate'];
  //   foreach($ListDMSP as $key => $value) {
  //       if($value['product_id']==$k){
  //         $item= $ListDMSP[$key];
  //         echo "Update SP có ID danh mục: ".$item['product_id'];
  //       }
  //   }
  // }

?>
