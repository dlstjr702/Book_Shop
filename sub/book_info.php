<!-- 헤더 S -->
<?php include("../inc/header.html") ?>
<!-- 헤더 E -->


<main>
    <!-- 서브탑 S -->
    <?php include("../inc/sub_top.html") ?>
    <!-- 서브탑 E -->
    
    <!-- 책 데이터 S-->
    <?php include("./book.php") ?>
    <!-- 책 데이터 E -->

    
    <!-- 서브컨텐츠 S -->
     <section id="sub_cont">
        <div class="sub_wrap">
            <div class="cm_inner">
                <div class="sub_ir">
                    <!-- 상품리스트 S -->
                    <div id="shp_prd_view">
                        <?php
                            $id = $_GET["id"];
                            $book = getBookById($id);
                        ?>

                        <div class="prd_row">
                            <div class="prd_col">
                                <div class="img_bx"></div>
                            </div>
                            <div class="prd_col">
                                <div class="txt_bx">
                                    <h3 class="prd_tit"><?= $book["name"]; ?></h3>
                                    <p class="prd_des"><?= $book["description"]; ?></p>
                                    <p class="prd_code"><b>도서코드 : </b><span class="badge"><?= $id; ?></span></p>
                                    <p class="prd_ath"><b>저자 : </b><?= $book["author"]; ?></p>
                                    <p class="prd_date"><b>출판일 : </b><?= $book["releaseDate"]; ?></p>
                                    <p class="prd_ctg"><b>분류 : </b><?= $book["category"]; ?></p>
                                    <p class="prd_uis"><b>재고수 : </b><?= $book["unitsInStock"]; ?></p>
                                    <p class="prd_prc"><?= $book["unitPrice"]; ?>원</p>
                                    <div class="btn_bx">
                                        <a href="#!" class="btn_ord">도서주문</a>
                                        <a href="./books.php" class="btn_list">도서목록</a>
                                    </div>
                                </div>
                            </div>
                        </div>





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