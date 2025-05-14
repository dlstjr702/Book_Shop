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
                                $date = date("Y/m/d");
                                $hour = date("H");
                                $minute = date("i");
                                $second = date("s");

                                if($hour <12||$hour==24){
                                    $am_pm = "AM";
                                }else{
                                    $am_pm = "PM";
                                    $hour = $hour - 12;

                                }
                                $time = $hour.":".$minute.":".$second."".$am_pm;
                                echo "현재 접속 일시 : ".$date."".$time;
                            ?>
                        </div>
                    </div>
                </div>
            </section>
            <!-- 본문영역 E -->
        </main>

        <?php include("../inc/footer.html") ?>