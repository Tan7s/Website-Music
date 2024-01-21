<div class="content_song_side">
        
        <div class="popular_song1">
            <div class="pop_song">
                <?php 
                $query_pop_song = "SELECT * FROM bai_hat";
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
           
        </div>