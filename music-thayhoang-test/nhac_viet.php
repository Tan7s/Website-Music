<div class="content_song_side">
        <div class="popular_song baner">
           <img src="img/nhacviet_baner.jpg" alt="">
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
                $query_pop_song = "SELECT chu_de.ID_CHU_DE,the_loai.ID_THE_LOAI,the_loai.TEN_THE_LOAI,the_loai.MOTA,the_loai.IMG_THE_LOAI
                FROM chu_de
                INNER JOIN the_loai ON chu_de.ID_CHU_DE = the_loai.ID_CHU_DE  WHERE chu_de.ID_CHU_DE = 6";
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
                            <h5><?php echo $row["TEN_THE_LOAI"]?> <br><div class="subtitle"><?php echo $row["TEN_THE_LOAI"]?></div></h5>
                        </li>
                    <?php
                }}
                ?>
            </div>
        </div>
        <div class="hot_song">
            <div class="head">
                <h4>Hot Songs</h4>
            </div>
            <div class="content-1">
                <div class="box1">
                    <?php
                        $query_hot_song ="SELECT * FROm bai_hat where ID_CHU_DE=6 limit 5";
                        $cmd = $conn->query($query_hot_song);
                        if($cmd->num_rows>0)
                        {
                            while($row=$cmd->fetch_assoc())
                            {
                                ?>
                                    <div class="baihat">
                                        <div class="img_baihat">
                                            <i class="bi playListPlay bi-play-circle" id="11"></i>
                                            <img src="<?php echo $row["IMG_BAI_HAT"]?>" alt="">
                                        </div>
                                        <div class="center">
                                            <h5><?php echo $row["TEN_BAI_HAT"]?></h5>
                                            <h6>HIEUTHUHAI, Kewtile</h6>
                                        </div>
                                        <div class="end">
                                            <h5>3:32</h5>
                                            <div class="heart"><i class="bi bi-heart"></i></div>
                                            <div class="more"><i class="bi bi-three-dots"></i></div>
                                        </div>
                                    </div>
                                <?php
                            }
                        }
                    ?>
                </div>
                
                <div class="box1">
                    <?php
                        $query_hot_song ="SELECT * FROm bai_hat where ID_CHU_DE=6 limit 5";
                        $cmd = $conn->query($query_hot_song);
                        if($cmd->num_rows>0)
                        {
                            while($row=$cmd->fetch_assoc())
                            {
                                ?>
                                    <div class="baihat">
                                        <div class="img_baihat">
                                            <i class="bi playListPlay bi-play-circle" id="11"></i>
                                            <img src="<?php echo $row["IMG_BAI_HAT"]?>" alt="">
                                        </div>
                                        <div class="center">
                                            <h5><?php echo $row["TEN_BAI_HAT"]?></h5>
                                            <h6>HIEUTHUHAI, Kewtile</h6>
                                        </div>
                                        <div class="end">
                                            <h5>3:32</h5>
                                            <div class="heart"><i class="bi bi-heart"></i></div>
                                            <div class="more"><i class="bi bi-three-dots"></i></div>
                                        </div>
                                    </div>
                                <?php
                            }
                        }
                    ?>
                </div>
                <div class="box1">
                    <?php
                        $query_hot_song ="SELECT * FROm bai_hat where ID_CHU_DE=6 limit 5";
                        $cmd = $conn->query($query_hot_song);
                        if($cmd->num_rows>0)
                        {
                            while($row=$cmd->fetch_assoc())
                            {
                                ?>
                                    <div class="baihat">
                                        <div class="img_baihat">
                                            <i class="bi playListPlay bi-play-circle" id="11"></i>
                                            <img src="<?php echo $row["IMG_BAI_HAT"]?>" alt="">
                                        </div>
                                        <div class="center">
                                            <h5><?php echo $row["TEN_BAI_HAT"]?></h5>
                                            <h6>HIEUTHUHAI, Kewtile</h6>
                                        </div>
                                        <div class="end">
                                            <h5>3:32</h5>
                                            <div class="heart"><i class="bi bi-heart"></i></div>
                                            <div class="more"><i class="bi bi-three-dots"></i></div>
                                        </div>
                                    </div>
                                <?php
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="popular_song">
            <div class="h4">
                <h4>Có Thể Bạn Sẽ Thích</h4>
                <div class="btn_s">
                    <i id="left_scroll" class="bi bi-arrow-left-short"></i>
                    <i id="right_scroll" class="bi bi-arrow-right-short"></i>
                </div>
            </div>
            <div class="pop_song">
                <?php 
                $query_pop_song = "SELECT chu_de.ID_CHU_DE,the_loai.ID_THE_LOAI,the_loai.TEN_THE_LOAI,the_loai.MOTA,the_loai.IMG_THE_LOAI
                FROM chu_de
                INNER JOIN the_loai ON chu_de.ID_CHU_DE = the_loai.ID_CHU_DE  WHERE chu_de.ID_CHU_DE = 6";
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
                            <h5><?php echo $row["TEN_THE_LOAI"]?> <br><div class="subtitle"><?php echo $row["TEN_THE_LOAI"]?></div></h5>
                        </li>
                    <?php
                }}
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