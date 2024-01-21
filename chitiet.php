<?php include('database.php')?>
<div class="content_chitiet">
    <section class="thongtin_baihat">
        <?php
        // Kết nối đến cơ sở dữ liệu
       
        // Lấy giá trị của tham số id từ URL
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        // Kiểm tra nếu có giá trị id
        if ($id) {
            // Thực hiện câu truy vấn
            $query="SELECT bai_hat.ID_BAI_HAT,bai_hat.TEN_BAI_HAT,bai_hat.IMG_BAI_HAT,ca_si.TEN_CA_SI,bai_hat.VIEW
                        FROM bai_hat
                        INNER JOIN ca_si ON bai_hat.ID_CA_SI = ca_si.ID_CA_SI  WHERE ID_BAI_HAT =". $id;
            $result = $conn->query($query);

            // Kiểm tra kết quả truy vấn
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <div class="img_baihat">
                        <img src="<?php echo $row["IMG_BAI_HAT"] ?>" alt="">
                        <i class="bi playListPlay bi-play-circle" id="<?php echo $row["ID_BAI_HAT"] ?>"></i>
                    </div>
                    <div class="thongtin">
                        <h1><?php echo $row["TEN_BAI_HAT"]?></h1>
                        <h6><?php echo $row["TEN_CA_SI"]?></h6>
                        <h6><?php echo $row["VIEW"]?> Lượt Nghe</h6>
                        <div class="play">
                            <i class="bi playListPlay bi-play-circle" id="<?php echo $row["ID_BAI_HAT"] ?>"></i>
                            <h4>Phát Bài Hát</h4>
                        </div>
                        <div class="tuychon">
                            <div class="heart"><i class="bi bi-heart"></i></div>
                            <div class="more"><i class="bi bi-three-dots"></i></div>
                    </div>
                    <?php
                }
            } else {
                echo "Không tìm thấy bài hát với ID tương ứng.";
            }
        } else {
            // echo "Không tìm thấy ID trong URL.";
        }


        $casi = isset($_GET['casi']) ? $_GET['casi'] :null;
        if($casi)
        {
            // Thực hiện câu truy vấn
            $query="SELECT * from ca_si where meta = '$casi' ";
            // echo $query;
            $result = $conn->query($query);

            // Kiểm tra kết quả truy vấn
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <div class="img_baihat">
                        <img src="<?php echo $row["IMG_CASI"] ?>" alt="">
                        <!-- <i class="bi playListPlay bi-play-circle" id="<?php echo $row["ID_BAI_HAT"] ?>"></i> -->
                    </div>
                    <div class="thongtin">
                        <h1><?php echo $row["TEN_CA_SI"]?></h1>
                        <h6><?php echo $row["MO_TA"]?></h6>
                        <!-- <h6><?php echo $row["VIEW"]?> Lượt Nghe</h6> -->
                        <div class="play">
                            <div class="heart"><i class="bi bi-heart"></i></div>
                            <h4>Yêu Thích</h4>
                        </div>
                        <div class="tuychon">
                            <div class="heart"><i class="bi bi-bar-chart-line-fill"></i></div>
                            <div class="more"><i class="bi bi-three-dots"></i></div>
                        </div>
                    <?php
                }
            } else {
                echo "Không tìm thấy ca sĩ với meta tương ứng.";
            }
        }



        $theloai = isset($_GET['theloai']) ? $_GET['theloai'] :null;
        if($theloai)
        {
            // Thực hiện câu truy vấn
            $query="SELECT * FROM the_loai  where META = '$theloai' ";
            // echo $query;
            $result = $conn->query($query);

            // Kiểm tra kết quả truy vấn
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <div class="img_baihat">
                        <img src="<?php echo $row["IMG_THE_LOAI"] ?>" alt="">
                        <!-- <i class="bi playListPlay bi-play-circle" id="<?php echo $row["ID_BAI_HAT"] ?>"></i> -->
                    </div>
                    <div class="thongtin">
                        <h1 class="theloai"><?php echo $row["TEN_THE_LOAI"]?></h1>
                        <h6><?php echo $row["MOTA"]?></h6>
                        <!-- <h6><?php echo $row["VIEW"]?> Lượt Nghe</h6> -->
                        <div class="play">
                            <div class="heart"><i class="bi bi-heart"></i></div>
                            <h4>Yêu Thích</h4>
                        </div>
                        <div class="tuychon">
                            <div class="heart"><i class="bi bi-bar-chart-line-fill"></i></div>
                            <div class="more"><i class="bi bi-three-dots"></i></div>
                        </div>
                    <?php
                }
            } else {
                echo "Không tìm thấy ca sĩ với meta tương ứng.";
            }
        }
        
        ?>
    </section>
    <section class="goiy">
        <?php
            // Kết nối đến cơ sở dữ liệu
        
            // Lấy giá trị của tham số id từ URL
            $id = isset($_GET['id']) ? $_GET['id'] : null;

            // Kiểm tra nếu có giá trị id
            if ($id) {
                // Thực hiện câu truy vấn
                // $query = "SELECT * FROM bai_hat WHERE ID_BAI_HAT = " . $id;
                $query="SELECT bai_hat.ID_BAI_HAT,bai_hat.TEN_BAI_HAT,bai_hat.IMG_BAI_HAT,ca_si.TEN_CA_SI
                        FROM bai_hat
                        INNER JOIN ca_si ON bai_hat.ID_CA_SI = ca_si.ID_CA_SI  WHERE ID_BAI_HAT =". $id;
                $result = $conn->query($query);

                // Kiểm tra kết quả truy vấn
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        ?>
                            <div class="baihat">
                                <i class="bi icon bi-music-note-beamed"></i>
                                <div class="start">
                                    <i class="bi playListPlay bi-play-circle" id="<?php echo $id?>"></i>
                                    <img  class="baihat"src="<?php echo $row["IMG_BAI_HAT"]?>" alt="">
                                </div>
                                <div class="center">
                                    <h5><?php echo $row["TEN_BAI_HAT"]?></h5>
                                    <h6><?php echo $row["TEN_CA_SI"]?></h6>
                                </div>
                                <div class="end">
                                    <i class="bi bi-heart"></i>
                                    <i class="bi bi-three-dots"></i>
                                    <h5>3:24</h5>
                                </div>
                            </div>
                        <?php
                    }
                } else {
                    echo "Không tìm thấy bài hát với ID tương ứng.";
                }
            } else {
                // echo "Không tìm thấy ID trong URL.";
            }





            $casi = isset($_GET['casi']) ? $_GET['casi'] :null;
            if($casi)
            {
                $query="SELECT ca_si.meta , ca_si.ID_CA_SI, ca_si.TEN_CA_SI,bai_hat.ID_BAI_HAT,bai_hat.TEN_BAI_HAT,
                bai_hat.IMG_BAI_HAT 
                FROM bai_hat
                INNER JOIN ca_si on ca_si.ID_CA_SI = bai_hat.ID_CA_SI  WHERE ca_si.meta = '$casi' limit 1" ;
                $result = $conn->query($query);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                    <div class="baihat">
                                <i class="bi icon bi-music-note-beamed"></i>
                                <div class="start">
                                    <i class="bi playListPlay bi-play-circle" id=""></i>
                                    <img  class="baihat"src="<?php echo $row["IMG_BAI_HAT"]?>" alt="">
                                </div>
                                <div class="center">
                                    <h5><?php echo $row["TEN_BAI_HAT"]?></h5>
                                    <h6><?php echo $row["TEN_CA_SI"]?></h6>
                                </div>
                                <div class="end">
                                    <i class="bi bi-heart"></i>
                                    <i class="bi bi-three-dots"></i>
                                    <h5>3:24</h5>
                                </div>
                            </div>
                                <?php
                            }
                        }
            }
            $theloai = isset($_GET['theloai']) ? $_GET['theloai'] :null;
            if($theloai)
            {
                $query="SELECT the_loai.META, the_loai.ID_THE_LOAI, the_loai.TEN_THE_LOAI, bai_hat.ID_BAI_HAT, bai_hat.TEN_BAI_HAT, ca_si.TEN_CA_SI,bai_hat.IMG_BAI_HAT 
                FROM ((bai_hat
                INNER JOIN the_loai ON the_loai.ID_THE_LOAI = bai_hat.ID_THE_LOAI)
                INNER JOIN ca_si ON bai_hat.ID_CA_SI = ca_si.ID_CA_SI)
                WHERE the_loai.META = '$theloai' limit 1" ;
                $result = $conn->query($query);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                    <div class="baihat">
                                <i class="bi icon bi-music-note-beamed"></i>
                                <div class="start">
                                    <i class="bi playListPlay bi-play-circle" id=""></i>
                                    <img  class="baihat"src="<?php echo $row["IMG_BAI_HAT"]?>" alt="">
                                </div>
                                <div class="center">
                                    <h5><?php echo $row["TEN_BAI_HAT"]?></h5>
                                    <h6><?php echo $row["TEN_CA_SI"]?></h6>
                                </div>
                                <div class="end">
                                    <i class="bi bi-heart"></i>
                                    <i class="bi bi-three-dots"></i>
                                    <h5>3:24</h5>
                                </div>
                            </div>
                                <?php
                            }
                        }
            }
        ?>
        <div class="quantam">
        <div class="head">
                <h3>Có Thể Bạn Quan Tâm</h3>
            </div>
           <?php
           $id = isset($_GET['id']) ? $_GET['id'] : null;
           if($id)
           {
            $sql="SELECT bai_hat.ID_BAI_HAT,bai_hat.TEN_BAI_HAT,bai_hat.IMG_BAI_HAT,ca_si.TEN_CA_SI
            FROM bai_hat
            INNER JOIN ca_si ON bai_hat.ID_CA_SI = ca_si.ID_CA_SI  limit 7 offset 1";
            $cmd = $conn->query($sql);
            if($cmd->num_rows>0)
            {
               while($row = $cmd->fetch_assoc())
               {
                   ?>
                       <div class="baihat">
                           <i class="bi icon bi-music-note-beamed"></i>
                           <div class="start">
                               <i class="bi playListPlay bi-play-circle" id="<?php echo $row["ID_BAI_HAT"] ?>"></i>
                               <img  class="baihat"src="<?php echo $row["IMG_BAI_HAT"]?>" alt="">
                           </div>
                           <div class="center">
                               <a class="bai_hat_goi_y"href="?UI=chitiet&id=<?php echo $row["ID_BAI_HAT"]?>">
                                   <h5><?php echo $row["TEN_BAI_HAT"]?></h5>
                                   <h6><?php echo $row["TEN_CA_SI"]?></h6>
                               </a>
                           </div>
                           <div class="link">
                               <a href=""><h6><?php echo $row["TEN_CA_SI"]?></h6></a>
                           </div>
                           <div class="end">
                               <i class="bi bi-heart"></i>
                               <i class="bi bi-three-dots"></i>
                               <h5>3:24</h5>
                           </div>
                       </div>
                   <?php
               }
            } 
           }
             
             $casi = isset($_GET['casi']) ? $_GET['casi'] :null;
             $query="SELECT ca_si.meta , ca_si.ID_CA_SI, ca_si.TEN_CA_SI,bai_hat.ID_BAI_HAT,bai_hat.TEN_BAI_HAT,
                bai_hat.IMG_BAI_HAT 
                FROM bai_hat
                INNER JOIN ca_si on ca_si.ID_CA_SI = bai_hat.ID_CA_SI  WHERE ca_si.meta = '$casi' limit 7 offset 1" ;
                $result = $conn->query($query);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        ?>
                            <div class="baihat">
                            <i class="bi icon bi-music-note-beamed"></i>
                            <div class="start">
                                <i class="bi playListPlay bi-play-circle" id="<?php echo $row["ID_BAI_HAT"] ?>"></i>
                                <img  class="baihat"src="<?php echo $row["IMG_BAI_HAT"]?>" alt="">
                            </div>
                            <div class="center">
                                <a class="bai_hat_goi_y"href="?UI=chitiet&id=<?php echo $row["ID_BAI_HAT"]?>">
                                    <h5><?php echo $row["TEN_BAI_HAT"]?></h5>
                                    <h6><?php echo $row["TEN_CA_SI"]?></h6>
                                </a>
                            </div>
                            <div class="link">
                                <a href=""><h6><?php echo $row["TEN_CA_SI"]?></h6></a>
                            </div>
                            <div class="end">
                                <i class="bi bi-heart"></i>
                                <i class="bi bi-three-dots"></i>
                                <h5>3:24</h5>
                            </div>
                        </div>
                        <?php
                    }
                }





            $theloai = isset($_GET['theloai']) ? $_GET['theloai'] :null;
            if($theloai)
            {
                $query="SELECT the_loai.META, the_loai.ID_THE_LOAI, the_loai.TEN_THE_LOAI, bai_hat.ID_BAI_HAT, bai_hat.TEN_BAI_HAT, ca_si.TEN_CA_SI,bai_hat.IMG_BAI_HAT 
                FROM ((bai_hat
                INNER JOIN the_loai ON the_loai.ID_THE_LOAI = bai_hat.ID_THE_LOAI)
                INNER JOIN ca_si ON bai_hat.ID_CA_SI = ca_si.ID_CA_SI)
                WHERE the_loai.META = '$theloai' limit 7 offset 1" ;
                $result = $conn->query($query);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                    <div class="baihat">
                                        <i class="bi icon bi-music-note-beamed"></i>
                                        <div class="start">
                                            <i class="bi playListPlay bi-play-circle" id="<?php echo $row["ID_BAI_HAT"] ?>"></i>
                                            <img  class="baihat"src="<?php echo $row["IMG_BAI_HAT"]?>" alt="">
                                        </div>
                                        <div class="center">
                                            <a class="bai_hat_goi_y"href="?UI=chitiet&id=<?php echo $row["ID_BAI_HAT"]?>">
                                                <h5><?php echo $row["TEN_BAI_HAT"]?></h5>
                                                <h6><?php echo $row["TEN_CA_SI"]?></h6>
                                            </a>
                                        </div>
                                        <div class="link">
                                            <a href=""><h6><?php echo $row["TEN_CA_SI"]?></h6></a>
                                        </div>
                                        <div class="end">
                                            <i class="bi bi-heart"></i>
                                            <i class="bi bi-three-dots"></i>
                                            <h5>3:24</h5>
                                        </div>
                                    </div>
                                <?php
                            }
                        }
            }
           ?>
        </div>
    </section>
</div>
<?php
if (isset($_GET['id'])) {
    $songId = $_GET['id'];
    $sql1 = "SELECT VIEW FROM bai_hat WHERE ID_BAI_HAT = $songId";
    $result1 = $conn->query($sql1);
    
    if ($result1->num_rows > 0) {
        $row = $result1->fetch_assoc();
        $view = $row["VIEW"];
        $view += 1;
        // echo $view;
        $sql2 = "UPDATE bai_hat SET VIEW = $view WHERE ID_BAI_HAT = $songId";
        // echo $sql;
        $result2 = $conn->query($sql2);
        if ($result2 === TRUE) {
            // echo "Cột 'VIEW' đã được tăng thành công!";
        } else {
            echo "Lỗi: " . $conn->error;
        }
    } else {
        echo "Không tìm thấy bài hát!";
    }
} else {
    // echo "Không có ID bài hát được cung cấp!";
}
?>