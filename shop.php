<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Store</title>

    <style>
        img{
            width: 150px;
        }
        .titles{
            text-align:center;
            background: rgb(39, 194, 194) ;
            color: white;
            font-size:  30px;
            border-radius:20px ;
            margin-top: 33px;
        }
        .price{
            color: red;
        }
       
    </style>
    
</head>
<body>
    <?php 
        $sanpham=array(
            'GIÀY DÉP'=>array(
                'sp1'=>array(
                    'img'=>'<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXckltr01d6nJVW_6rlZOUGp-Gmjb-JZihUg&usqp=CAU"/>',
                    'name'=>'Dép nam nữ',
                    'Code'=>'SD02K',
                    'Price'=>17790000,
                ),
                'sp2'=>array(
                    'img'=>'<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXckltr01d6nJVW_6rlZOUGp-Gmjb-JZihUg&usqp=CAU"/>',
                    'name'=>'Dép nam nữ',
                    'Code'=>'SD02K',
                    'Price'=>6890000,
                ),
                'sp3'=>array(
                    'img'=>'<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXckltr01d6nJVW_6rlZOUGp-Gmjb-JZihUg&usqp=CAU"/>',
                    'name'=>'Dép nam nữ',
                    'Code'=>'SD02K',
                    'Price'=>34990000,
                ),
                'sp4'=>array(
                    'img'=>'<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHCI4Hbtx183OnebxY5Q4Fo9ME0BfIDixAvWdq8xVn82fwZXNQoR0RcI9ZaqcbrmwpAUQ&usqp=CAU"/>',
                    'name'=>'Dép nam nữ',
                    'Code'=>'SD02K',
                    'Price'=>10800000,
                ),
                'sp5'=>array(
                    'img'=>'<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHCI4Hbtx183OnebxY5Q4Fo9ME0BfIDixAvWdq8xVn82fwZXNQoR0RcI9ZaqcbrmwpAUQ&usqp=CAU"/>',
                    'name'=>'Dép nam nữ',
                    'Code'=>'SD02K',
                    'Price'=>12098000,
                )
                ,
                'sp6'=>array(
                    'img'=>'<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHCI4Hbtx183OnebxY5Q4Fo9ME0BfIDixAvWdq8xVn82fwZXNQoR0RcI9ZaqcbrmwpAUQ&usqp=CAU"/>',
                    'name'=>'Dép nam nữ',
                    'Code'=>'SD02K',
                    'Price'=>5490000,
                )
                ),

                'TÚI XÁCH'=>array(
                    'sp01'=>array(
                        'img'=>'<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXVHstZQzb--rA35VLwXc5OYqXfHUyt9yv7A&usqp=CAU"/>',
                        'name'=>'Túi xách nam',
                        'Code'=>'T68-SP-2A1-ĐEN',
                        'Price'=>399000,
                    ),
                    'sp02'=>array(
                        'img'=>'<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXVHstZQzb--rA35VLwXc5OYqXfHUyt9yv7A&usqp=CAU"/>',
                        'name'=>'Túi xách nam',
                        'Code'=>'T68-SP-2A1-ĐEN',
                        'Price'=>3990900,
                    ),
                    'sp03'=>array(
                        'img'=>'<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXVHstZQzb--rA35VLwXc5OYqXfHUyt9yv7A&usqp=CAU"/>',
                        'name'=>'Túi xách nam',
                        'Code'=>'T68-SP-2A1-ĐEN',
                        'Price'=>499090,
                    ),
                    'sp04'=>array(
                        'img'=>'<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRociNsEc25_XwrCjwnrYuralo1t1N2c3XRMQ&usqp=CAU"/>',
                        'name'=>'Túi xách nữ',
                        'Code'=>'T68-SP-2A1-ĐEN',
                        'Price'=>5590000,
                    ),
                    'sp05'=>array(
                        'img'=>'<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRociNsEc25_XwrCjwnrYuralo1t1N2c3XRMQ&usqp=CAU"/>',
                        'name'=>'Túi xách nữ',
                        'Code'=>'T68-SP-2A1-ĐEN',
                        'Price'=>5290000,
                    )
                    ,
                    'sp06'=>array(
                        'img'=>'<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRociNsEc25_XwrCjwnrYuralo1t1N2c3XRMQ&usqp=CAU"/>',
                        'name'=>'Túi xách nũ',
                        'Code'=>'T68-SP-2A1-ĐEN',
                        'Price'=>11990000,
                    )
                )
                    );
        ksort($sanpham);

        

    ?>
    <?php 
        foreach($sanpham as $k=>$vl){ 
        ?>
        <div class="container"> <div class="titles">*<?php echo $k ?>*</div></div>
        <div class="container">
                <div class="row">
                    <?php foreach($vl as $k1=>$vl1){ 
                    ?>
                       <div class="col-sm-2">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $vl1['img']  ?></h5>
                                <p class="card-text"><?php echo $vl1['name'] ?></p>
                                <p class ="card-text"><?php echo $vl1['Code']?></p>
                                <p class="card-text"> <div class="price"><?php echo $vl1['Price'] ?> <span style="text-decoration:underline">đ</span></div></p>
            
                                <!-- <p class="card-text">
                                   <button>Đặt mua</button>
                                </p> -->
                            </div>
                            </div>
                            <div id="button" style="text-align: center";  onclick="return confirm('Thank you for order')">
                            <button  style="text-align: center; background-color:orange; color:white" id="buy">Đặt mua</button></div>
                        </div>
                    <?php
                    }
                    ?>
                    </div>
                </div>
        </div>   
    <?php
    }
    ?>

<form action="" method="post">
    <label for="">Id</label>
    <input type="text" name="id" value="">  <br>
    <label for="">Tên sản phẩm</label>
    <input type="text" name="name" value="">  <br>
    <label for="">Code</label>
    <input type="text" name="sex" value="">  <br>
    <label for="">Price</label>
    <input type="text" name="qquan" value="">  <br>
    <label for="">imga</label>
    <input type="text" name="nhoc" value="">  <br>
    <button name="submit">Add</button>
</form>
</body>
</html>