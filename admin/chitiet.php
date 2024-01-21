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
                        <form action="" method="POST" class="tuychon">
                        <a href=""><input name ="xoa"class="delete"type="submit" value="Xóa"></a>
                        <!-- <a href=""><input class="delete"type="submit" value="Sửa"></a> -->
                        <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                // Kiểm tra nút xóa đã được nhấn hay chưa
                                if (isset($_POST['xoa'])) {
                                    // Lấy giá trị id bài hát từ yêu cầu POST
                                    $id = $_GET['id'];
                                    // Thực hiện xóa bài hát tương ứng từ cơ sở dữ liệu
                                    $sql = "DELETE FROM bai_hat WHERE ID_BAI_HAT = $id";
                                    if ($conn->query($sql) === true) {
                                        echo "Xóa bài hát thành công.";
                                        exit();
                                    } else {
                                        echo "Lỗi: " . $sql . "<br>" . $connect->error;
                                    }
                                }
                            }
                            ?>
                        </form>
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
        <div class="quantam1">
        <form action="" method="POST" enctype="multipart/form-data" class="sign-in-form">
            <h2 class="title">Sửa Thông Tin Bài Hát</h2>
            <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" name="ten_baihat" placeholder="Tên Bài Hát" id="ten_baihat" />
            </div>
            <div class="input-field">
                <i class="fa fa-file-image-o" aria-hidden="true"></i>
                <!-- <input type="file" name="img" id="img" /> -->
            </div>
            <div class="input-field">
                <i class="fa fa-file-audio-o"></i>
                <!-- <input type="file" name="link" id="link" /> -->
            </div>
            <div class="input-field">
                <i class="fa fa-pencil-square" aria-hidden="true"></i>
                <input type="text" name="mota" id="mota" placeholder="Mô Tả Bài Hát" />
            </div>
            <div class="input-field">
                <i class="fa fa-id-card" aria-hidden="true"></i>
                <input type="text" name="casi" id="casi" placeholder="ID Ca Sĩ" />
            </div>
            <input type="submit" name="sua" value="Sửa Bài Hát" class="btn solid" />
        </form>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Kiểm tra nút sửa đã được nhấn hay chưa
                if (isset($_POST['sua'])) {
                    // Lấy giá trị id bài hát từ yêu cầu POST
                    $id = $_GET['id'];
                
                    // Lấy các giá trị mới từ yêu cầu POST
                    $ten_baihat = $_POST["ten_baihat"];
                    $mota = $_POST["mota"];
                    $casi = $_POST["casi"];
                
                    // Thực hiện cập nhật thông tin bài hát trong cơ sở dữ liệu
                    $sql = "UPDATE bai_hat SET TEN_BAI_HAT='$ten_baihat', ID_CA_SI='$casi', MOTA_BAIHAT='$mota' WHERE ID_BAI_HAT = $id";
                    if ($conn->query($sql) === true) {
                        echo "Cập nhật thông tin bài hát thành công.";
                    } else {
                        echo "Lỗi: " . $sql . "<br>" . $connect->error;
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