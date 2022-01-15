<?php
  include_once './config/constants.php';
  include_once './config/Db.php';
  $db=new Db();
?>


<?php
    include_once './header.php';
    include_once './productNews-Value.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <title>Highlands Coffee</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
</head>

<div class="container">
    <h1>TIN TỨC & SỰ KIỆN</h1>
    <div class="who" cellspacing="0" cellpadding="0">
        <?php
        $data=$db->selectQuery("select * from posts");
        foreach ($data as $key => $value) {
        ?>
            <div class="table">
                <div class="table-"><a href="post.php?id=<?php echo $value['post_id']?>"><img src="./image/<?php echo  $value['img'] ?>"> </a></div>
                <div class="table-"><a href="post.php?id=<?php echo $value['post_id']?>"><b><?php echo $value['post_name'] ?></b></a></div>
                <div class="table- tabletime"><i class="far fa-calendar"></i><?php echo $value['created_at'] ?></div>
            </div>
        <?php
        }
        ?>
    </div>
</div>
<style>
    .container{
        max-width: 1200px;
        margin: auto;
    }
    .who {
        display: flex;
        flex-wrap: wrap;
    }

    .who .table {
        flex: 0 0 33%;
        text-align: left;
        padding: 0px 12px;
        box-sizing: border-box;

    }
    .who .table .table-
    {   
        padding: 10px 0px;
        box-sizing: border-box;
    }
    .table .table- a{
        text-decoration: none;
        color:#000;
    }
    .table .table- a:hover{
        color:#33333;
    }

    .who .table .table- img {
        width: 100%;
        height: 293px;

    }
    .tabletime{
        color:#888888;
    }
    .fa-calendar
    {
        color: #b22830;
        padding-right: 10px;
    }
    h1 {
        color: #53382C;
        font-size: 53px;
        margin-top: 10px;
    }
</style>
<?php
              include './footer.php'
            ?>

             <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <!-- slick slider jquery -->
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ"
    crossorigin="anonymous"></script>
  <!-- homejs -->
  <script src="./js/home.js"></script>