<?php include("../inc/header.html") ?>

        <main>
            <?php
                $greeting = "도서 쇼핑몰에 오신 것을 환영합니다";
                $tagline = "Welcome to Web Market!";
            ?>


            <!-- 메인 비주얼 S -->
            <section id="ms_visual">
                <div class="img_box">
                    <img src="../img/main/ms_book01.jpg" alt="서점이미지">
                </div>
                <div class="sec_wrap">
                    <div class="cm_inner">
                        <div class="sec_ir">
                            <div class="txt_box">
                                <h2 class="ms_tit"><?php echo $greeting ?></h2>
                                <p class="ms_sub">BookMarket</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- 메인 비주얼 E -->
            <!-- 본문영역 S -->
            <section id="sub_container">
                <div class="sec_wrap">
                    <div class="cm_inner">
                        <div class="sec_ir">
                            <h3 class="tit"><?php echo $tagline ?></h3>
                            <?php
                                header("Refresh:5");
                                date_default_timezone_set("Asia/SEoul");
                                echo "현재 접속 일시 : ".date("Y년m월d일 H시i분s초 A");
                            ?>
                        </div>
                    </div>
                </div>
            </section>
            <!-- 본문영역 E -->
        </main>

        <?php include("../inc/footer.html") ?>