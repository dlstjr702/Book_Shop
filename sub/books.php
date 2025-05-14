<!-- 헤더 S -->
<?php include("../inc/header.html") ?>
<!-- 헤더 E -->


<main>
    <!-- 서브탑 S -->
    <?php include("../inc/sub_top.html") ?>
    <!-- 서브탑 E -->
    
    <?php include("./book.php") ?>

    
    <!-- 서브컨텐츠 S -->
     <section id="sub_cont">
        <div class="sub_wrap">
            <div class="cm_inner">
                <div class="sub_ir">
                    <!-- 상품리스트 S -->
                    <div id="shp_prd_list">
                        <div class="hd"></div>
                        <div class="bd">
                            <ul class="prd_list">
                                <?php
                                    for($i = 0; $i < 3; $i++){
                                        $id = "ISBN".(1234+$i);
                                    
                                ?>
                                <li>
                                    <div class="li_ir">
                                        <div class="txt_bx">
                                            <h3 class="prd_tit"><?php echo $BookArray[$id]["name"]; ?></h3>
                                            <p class="prd_ath"><?php echo $BookArray[$id]["author"]." | ".$BookArray[$id]["releaseDate"]; ?></p>
                                            <p class="prd_des"><?php echo mb_substr($BookArray[$id]["description"],0,90,'utf-8')."..."; ?></p>
                                            <p class="prd_prc"><?php echo $BookArray[$id]["unitPrice"]; ?>원</p>
                                        </div>
                                    </div>
                                </li>
                                <?php
                                    }
                                ?>
                            </ul>
                        </div>
                        <div class="ft"></div>
                    </div>
                    <!-- 상품리스트 E -->
                </div>
            </div>
        </div>
     </section>
    <!-- 서브컨텐츠 E -->
</main>


<!-- 푸터 S -->
<?php include("../inc/footer.html") ?>
<!-- 푸터 E -->