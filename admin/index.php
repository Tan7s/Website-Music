<?php include_once('../database.php') ?>
<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css?v=<?php echo time();?>">
    <title>Music Appsss</title>
</head>

<body>
<header>
    <div class="menu_side">
        <div class="logo">
        </div>
        <h1>Tân.one</h1>
        <div class="playlist">
            <?php
                $query_menu2 = "SELECT * From menu where LOAI = 2";
                $cmd = $conn->query($query_menu2);
                if($cmd->num_rows > 0)
                {
                    while($row = $cmd->fetch_assoc())
                    {
                        ?>
                            <h4 class="active"><span></span><i class="<?php echo $row["LOGO"]?>"></i><?php echo $row["TEN_MENU"]?></h4>
                        <?php
                    }
                } 
            ?>
        </div>
        <div class="menu_song">
            <?php
                $query_song = "SELECT * FROM bai_hat where ID_PLAYLIST =1";
                $cmd = $conn->query($query_song);
                if($cmd ->num_rows>0)
                {
                    while($row = $cmd->fetch_assoc())
                    {
                        ?>
                            <li class="songItem" style="background: rgba(105, 105, 170, 0);">
                                <span><?php echo $row["ID_BAI_HAT"]?></span>
                                <img src="<?php echo $row["IMG_BAI_HAT"]?>" alt="">
                                <h5> <?php echo $row["TEN_BAI_HAT"]?> <br>
                                 <div class="subtitle"><?php echo $row["TEN_BAI_HAT"]?></div></h5>
                                <i  class="bi playListPlay bi-play-circle" id="<?php echo $row["ID_BAI_HAT"]?>"></i>
                            </li>
                        <?php
                    }
                } 
            ?>
        </div>
    </div>
   
    

    <div class="song_side">
        <div class="menu">
            <nav>
                <ul>
                    <?php
                        $query_menu1 = "SELECT * From menu where LOAI =1 limit 1";
                        $cmd=$conn->query($query_menu1);
                         if($cmd->num_rows>0)
                         {
                            while($row = $cmd -> fetch_assoc())
                            {
                                ?>
                                    <li><a href="?UI=<?php echo $row['META']?>"><?php echo $row["TEN_MENU"]?></a></li>
                                <?php
                            }
                         }
                    ?>
                    <li><a href="them_bai_hat.php">Thêm Bài Hát</a></li>
                </ul>
                <div class="search">
                    <i class="bi bi-search"></i>
                    <input type="text" placeholder="Search Music...">
                </div>
                <div class="user">
                    <?php
                        
     					$user= isset($_SESSION['username'])?$_SESSION['username']:"Chua dang nhap";
                        
                        if(isset($_SESSION['username']))
                        {
                            ?>
                             <h6><?php echo  $user ;?></h6>
                             <a href="../logout.php"> <input class="dangxuat"type="submit" value="Đăng Xuất"></a>
                            <?php
                        }
                        else{
                            ?>
                            <a href="login.php"><img src="https://avatar.talk.zdn.vn/default.jpg" alt="User"></a>
                            <?php
                        }
                    ?>

                    
                </div>
            </nav>
        </div>
       
        <?php
    // $view = "dangky/dangky";
    // Kiểm tra xem có giá trị được gửi đến trang web không
    if (isset($_GET['UI'])) {
        // Lấy giá trị tên từ URL và lưu vào biến $view
        $view = $_GET['UI'];
        // chèn  giá trị  đã lấy được
        include $view . ('.php');
    }
    ?>
        
    </div>
</div>
<div class="master_play">
        <div class="wave">
            <div class="wave1"></div>
            <div class="wave1"></div>
            <div class="wave1"></div>
        </div>
        <?php
            $query_menu1 = "SELECT * From bai_hat where ID_BAI_HAT =1";
                $cmd=$conn->query($query_menu1);
                    if($cmd->num_rows>0)
                    {
                       while($row = $cmd -> fetch_assoc())
                       {
                           ?>
                               <img src="<?php echo $row["IMG_BAI_HAT"]?>" alt="Alan" id="poster_master_play">
                               <h5 id="title"><?php echo $row["TEN_BAI_HAT"]?> <br><div class="subtitle">Tamashaa</div></h5>
                           <?php
                       }
                    }
        ?>
        
        
        <div class="icon">
            <i class="bi bi-skip-start-fill" id="back"></i>
            <i class="bi bi-play-fill" id="masterPlay"></i>
            <i class="bi bi-skip-end-fill" id="next"></i>
        </div>
        <span id="currentStart">0:01</span>
        <div class="bar">
            <input type="range" id="seek" min="0" value="0" max="100">
            <div class="bar2" id="bar2" style="width: 0%;"></div>
            <div class="dot" style="left: 0%;"></div>
        </div>
        <span id="currentEnd">3:36</span>

        <div class="vol">
            <i class="bi bi-volume-down-fill" id="vol_icon"></i>
            <input type="range" id="vol" min="0" value="30" max="100">
            <div class="vol_bar"></div>
            <div class="dot" id="vol_dot"></div>
        </div>
</div>
</header>
<script src="app.js?v=<?php echo time();?>"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</body></html>