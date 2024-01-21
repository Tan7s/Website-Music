<?php require_once('../config.php');?>
<?php


$ten_baihat = "";
$img = "";
$link = "";
$mota = "";
$casi = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ten_baihat = $_POST["ten_baihat"];
    $mota = $_POST["mota"];
    $casi = $_POST["casi"];

    if (isset($_FILES['img']) && isset($_FILES['link'])) {
        $file_name = $_FILES['img']['name'];
        $file_tmp = $_FILES['img']['tmp_name'];
        $upload_dir = 'img/';
        $img = $upload_dir . $file_name;
        move_uploaded_file($file_tmp, $img);

        $file_name_link = $_FILES['link']['name'];
        $file_tmp_link = $_FILES['link']['tmp_name'];
        $upload_link = 'audio-music/';
        $link = $upload_link . $file_name_link;
        move_uploaded_file($file_tmp_link, $link);
    }

    $sql = "INSERT INTO bai_hat (TEN_BAI_HAT, ID_CA_SI, MOTA_BAIHAT, LINK_BAI_HAT, IMG_BAI_HAT) VALUES ('$ten_baihat', '$casi', '$mota', '$link', '$img')";

    if ($conn->query($sql) === true) {
        echo "Thêm thông tin bài hát thành công.";
    } else {
        echo "Lỗi: " . $sql . "<br>" . $connect->error;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="admin.css?v=<?php echo time(); ?>" />
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="" method="POST" enctype="multipart/form-data" class="sign-in-form">
                    <h2 class="title">Thêm Bài Hát Mới</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="ten_baihat" placeholder="Tên Bài Hát" id="ten_baihat" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="file" name="img" id="img" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="file" name="link" id="link" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="text" name="mota" id="mota" placeholder="Mô Tả Bài Hát" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="text" name="casi" id="casi" placeholder="ID Ca Sĩ" required />
                    </div>
                    <input type="submit" value="Thêm Bài Hát" class="btn solid" name="dangnhap" />
                </form>
            </div>
        </div>
    </div>
</body>

</html>
