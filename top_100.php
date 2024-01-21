<div class="content_song_side">
        <div class="popular_song baner">
           <img src="img/top100_banner.jpg" alt="">
        </div>
        <div class="popular_song">
            <div class="h4">
                <h4>Nổi bật</h4>
                <div class="btn_s">
                    <i id="left_scroll" class="bi bi-arrow-left-short"></i>
                    <i id="right_scroll" class="bi bi-arrow-right-short"></i>
                </div>
            </div>
            <div class="pop_song">
                <?php 
                $query_pop_song = "SELECT * FROm the_loai  where ID_CHU_DE = 5";
                $cmd = $conn->query($query_pop_song);
                if($cmd->num_rows>0)
                {
                    while($row = $cmd->fetch_assoc()){
                    ?>
                        <li class="songItem" style="background: rgba(105, 105, 170, 0.1);">
                            <div class="img_play">
                                <img src="<?php echo $row["IMG_THE_LOAI"]?>" alt="alan">
                                <!-- <i class="bi playListPlay bi-play-circle" id="<?php echo $row["ID_BAI_HAT"]?>"></i> -->
                            </div>
                            <a href="?UI=chitiet&theloai=<?php echo $row["META"]?>"><h5><?php echo $row["TEN_THE_LOAI"]?> <br><div class="subtitle"><?php echo $row["MOTA"]?></div></h5></a>
                        </li>
                    <?php
                }}
                ?>
            </div>
        </div>
        <div class="the_loai">
            <div class="h4">
                <h4>Nhạc Âu Mĩ</h4>
                <div class="btn_s">
                    <i id="left_scroll" class="bi bi-arrow-left-short"></i>
                    <i id="right_scroll" class="bi bi-arrow-right-short"></i>
                </div>
            </div>
            <div class="content_song">
                <?php
                    $query_content ="SELECT * FROm the_loai  where PARTNER = 12";
                    $cmd = $conn->query($query_content);
                    if($cmd->num_rows>0)
                    {
                        while($row = $cmd->fetch_assoc())
                        {
                            ?>
                            <li class="songitem">
                                <div class="img_item">
                                    <img src="<?php echo $row["IMG_THE_LOAI"]?>" alt="alan">
                                    <i class="bi playListPlay bi-pause-circle" id="7"></i>
                                </div>
                                 <h5><?php echo $row["TEN_THE_LOAI"]?><br>
                                 </h5>
                                 </a>
                             </li>
                            <?php
                        }
                    } 
                ?>
            </div>
        </div>
        <div class="the_loai chude">
            <div class="content_song">
                <a href="">
                <li class="songitem_chude">
                    <div class="img_item">
                        <img src="img/chude1.jpg" alt="alan">
                    </div>
                </li>
                </a>
                <a href="">
                <li class="songitem_chude">
                    <div class="img_item">
                        <img src="img/chude2.jpg" alt="alan">
                    </div>
                </li>
                </a>
                <a href="">
                <li class="songitem_chude">
                    <div class="img_item">
                        <img src="img/chude3.jpg" alt="alan">
                    </div>
                </li>
                </a>
            </div>
        </div>
        
        <div class="the_loai nghe_si">
            <div class="h4">
                <h4>Nghệ SĨ Thinh Hành</h4>
                <div class="btn_s">
                    <i id="left_scroll" class="bi bi-arrow-left-short"></i>
                    <i id="right_scroll" class="bi bi-arrow-right-short"></i>
                </div>
            </div>
            <div class="content_song">
                <?php  
                    $sql_casi = "SELECT * from ca_si limit 5";
                    $cmd = $conn->query($sql_casi);
                    if($cmd->num_rows>0)
                    {
                        while($row = $cmd->fetch_assoc())
                        {
                            ?>
                                <li class="songitem">
                                    <div class="img_item">
                                        <img src="<?php echo $row['IMG_CASI'];?>" alt="alan">
                                    </div>
                                     <h5><?php echo $row['TEN_CA_SI']?>
                                     <br>
                                        <div class="subtitle"><?php echo $row['MO_TA']?></div>
                                    </h5>
                                </li>
                            <?php
                        }
                    }
                ?>
            </div>
        </div>