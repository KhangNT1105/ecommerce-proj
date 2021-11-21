<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<?Php
include './productNews-Value.php'
?>
<div class="container">
    <h1>TIN TỨC</h1>
    <div class="who" cellspacing="0" cellpadding="0">
        <?php
        foreach ($ListNews as $key => $value) {
        ?>
            <div class="table">
                <div class="table-"><img src="<?php echo  $value['img'] ?>"> </div>
                <div class="table-"><b><?php echo $value['product_content'] ?></b></div>
                <div class="table- tabletime"><i class="far fa-calendar"></i><?php echo $value['date_created'] ?></div>
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
    }
</style>