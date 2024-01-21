<div class="content_song_side">
        
        <div class="popular_song">
            <div class="h4">
                <h4>Chủ Đề</h4>
                <div class="btn_s">
                    <i id="left_scroll" class="bi bi-arrow-left-short"></i>
                    <i id="right_scroll" class="bi bi-arrow-right-short"></i>
                </div>
            </div>
            <div class="pop_song">
                <?php 
                $query_pop_song = "SELECT * FROM chu_de limit 5";
                $cmd = $conn->query($query_pop_song);
                if($cmd->num_rows>0)
                {
                    while($row = $cmd->fetch_assoc()){
                    ?>
                        <li class="songItem chude" style="background: rgba(105, 105, 170, 0.1);">
                            <a href="?UI=<?php  echo $row['META']?>">
                            <div class="img_play">
                                <p><?php echo $row['TEN_CHU_DE']?></p>
                                <img src="<?php echo $row['IMG_CHUDE']?>" alt="alan">
                            </div>
                            </a>
                        </li>
                    <?php
                }}
                ?>
            </div>
           
        </div>
        <div class="the_loai">
            <div class="h4">
                <!-- EDM -->
                <h4>EDM</h4>
                <div class="btn_s">
                    <i id="left_scroll" class="bi bi-arrow-left-short"></i>
                    <i id="right_scroll" class="bi bi-arrow-right-short"></i>
                </div>
            </div>
            <div class="content_song">
                <?php
                    $query_content ="SELECT * FROM  bai_hat Where ID_THE_LOAI=1";
                    $cmd = $conn->query($query_content);
                    if($cmd->num_rows>0)
                    {
                        while($row = $cmd->fetch_assoc())
                        {
                            ?>
                            <li class="songitem">
                                <div class="img_item">
                                    <img src="<?php echo $row["IMG_BAI_HAT"]?>" alt="alan">
                                    <i class="bi playListPlay bi-pause-circle" id="<?php echo $row['ID_BAI_HAT']?>"></i>
                                </div>
                                 <h5><?php echo $row["TEN_BAI_HAT"]?>
                                 <br><div class="subtitle"><?php echo $row["TEN_BAI_HAT"]?></div></h5>
                                 </h5>
                             </li>
                            <?php
                        }
                    } 
                ?>
            </div>
        </div>
        <div class="the_loai">
            <div class="h4">
                <!-- Nhạc Không Lời -->
                <h4>Nhạc Không Lời</h4>
                <div class="btn_s">
                    <i id="left_scroll" class="bi bi-arrow-left-short"></i>
                    <i id="right_scroll" class="bi bi-arrow-right-short"></i>
                </div>
            </div>
            <div class="content_song">
                <?php
                    $query_content ="SELECT * FROM  bai_hat Where ID_THE_LOAI=2";
                    $cmd = $conn->query($query_content);
                    if($cmd->num_rows>0)
                    {
                        while($row = $cmd->fetch_assoc())
                        {
                            ?>
                            <li class="songitem">
                                <div class="img_item">
                                    <img src="<?php echo $row["IMG_BAI_HAT"]?>" alt="alan">
                                    <i class="bi playListPlay bi-pause-circle" id="<?php echo $row['ID_BAI_HAT']?>"></i>
                                </div>
                                 <h5><?php echo $row["TEN_BAI_HAT"]?>
                                 <br><div class="subtitle"><?php echo $row["TEN_BAI_HAT"]?></div></h5>
                                 </h5>
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