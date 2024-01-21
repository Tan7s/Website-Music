<?php include('database.php')?>
<?php
$sql = "SELECT * FROM bai_hat ";
$result = $conn->query($sql);

$songs = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $song = array(
            "id" => $row["ID_BAI_HAT"],
            "songName" => $row["TEN_BAI_HAT"],
            "poster" => $row["IMG_BAI_HAT"],
            "mota" => $row["MOTA_BAIHAT"],
            "meta" => $row["META"],
            "link" => $row["LINK_BAI_HAT"],
            "img" => $row["IMG_BAI_HAT"]
        );
        $songs[] = $song;
    }
}
// Trả về dữ liệu bài hát dưới dạng JSON
header('Content-Type: application/json');
echo json_encode($songs);

