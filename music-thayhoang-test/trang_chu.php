<div class="content_song_side">
        
        <div class="popular_song">
            <div class="h4">
                <h4>Nhạc Mới</h4>
                <div class="btn_s">
                    <i id="left_scroll" class="bi bi-arrow-left-short"></i>
                    <i id="right_scroll" class="bi bi-arrow-right-short"></i>
                </div>
            </div>
            <div class="pop_song">
                <?php 
                $query_pop_song = "SELECT * FROM bai_hat WHERE PARTNER = 6 LIMIT 5;";
                $cmd = $conn->query($query_pop_song);
                if ($cmd->num_rows > 0) {
                    while ($row = $cmd->fetch_assoc()) {
                        ?>
                        <li class="songItem">
                            <div class="img_play">
                                <img src="<?php echo $row["IMG_BAI_HAT"]?>" alt="alan">
                                <i class="bi playListPlay bi-play-circle" id="<?php echo $row["ID_BAI_HAT"]?>"></i>
                            </div>
                            <a href="?UI=chitiet&id=<?php echo $row["ID_BAI_HAT"]?>">
                                <h5><?php echo $row["TEN_BAI_HAT"]?> <br><div class="subtitle"><?php echo $row["MOTA_BAIHAT"]?></div></h5>
                            </a>
                        </li>
                        <?php
                    }
                }
                ?>
            </div>

           
        </div>
        <div class="the_loai">
            <div class="h4">
                <h4>EDM</h4>
                <div class="btn_s">
                    <i id="left_scroll" class="bi bi-arrow-left-short"></i>
                    <i id="right_scroll" class="bi bi-arrow-right-short"></i>
                </div>
            </div>
            <div class="content_song">
                <?php
                    $query_content ="SELECT chu_de.ID_CHU_DE,the_loai.ID_THE_LOAI,the_loai.TEN_THE_LOAI,the_loai.MOTA,the_loai.IMG_THE_LOAI
                                    FROM chu_de
                                    INNER JOIN the_loai ON chu_de.ID_CHU_DE = the_loai.ID_CHU_DE limit 5";
                    $cmd = $conn->query($query_content);
                    if($cmd->num_rows>0)
                    {
                        while($row = $cmd->fetch_assoc())
                        {
                            ?>
                            <li class="songitem">
                                <div class="img_item">
                                    <img src="<?php echo $row["IMG_THE_LOAI"]?>" alt="alan">
                                </div>
                                 <a href=""><h5><?php echo $row["TEN_THE_LOAI"]?><br><div class="subtitle"><?php echo $row['MOTA']?></div></h5></a>
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
                                     <a href="?UI=chitiet&casi=<?php echo $row["meta"]?>">
                                     <h5><?php echo $row['TEN_CA_SI']?>
                                     <br>
                                        <div class="subtitle"><?php echo $row['MO_TA']?></div>
                                    </h5>
                                     </a>
                                </li>
                            <?php
                        }
                    }
                ?>
            </div>
            
        </div>