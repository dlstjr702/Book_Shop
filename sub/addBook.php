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
                    <!-- 상품입력 S -->
                    <div id="shp_add_inp">
                        <form action="./processAddBook.php" name="newBook" method="post">
                            <div class="rows">
                                <!-- row(도서코드) S -->
                                <dl class="row">
                                    <dt>
                                        <label for="">도서코드</label>
                                    </dt>
                                    <dd>
                                        <div class="inp_bx">
                                            <input type="text" name="bookId" class="form-control">
                                        </div>
                                    </dd>
                                </dl>
                                <!-- row E -->
                                <!-- row(도서명) S -->
                                <dl class="row">
                                    <dt>
                                        <label for="">도서명</label>
                                    </dt>
                                    <dd>
                                        <div class="inp_bx">
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                    </dd>
                                </dl>
                                <!-- row E -->
                                <!-- row(가격) S -->
                                <dl class="row">
                                    <dt>
                                        <label for="">가격</label>
                                    </dt>
                                    <dd>
                                        <div class="inp_bx">
                                            <input type="text" name="unitPrice" class="form-control">
                                        </div>
                                    </dd>
                                </dl>
                                <!-- row E -->
                                <!-- row(저자) S -->
                                <dl class="row">
                                    <dt>
                                        <label for="">저자</label>
                                    </dt>
                                    <dd>
                                        <div class="inp_bx">
                                            <input type="text" name="author" class="form-control">
                                        </div>
                                    </dd>
                                </dl>
                                <!-- row E -->
                                <!-- row(상세정보) S -->
                                <dl class="row">
                                    <dt>
                                        <label for="">상세정보</label>
                                    </dt>
                                    <dd>
                                        <div class="inp_bx">
                                            <textarea name="description" cols="50" rows="2" class="form-contorl" placeholder="100자 이상 적어주세요"></textarea>
                                        </div>
                                    </dd>
                                </dl>
                                <!-- row E -->
                                <!-- row(분류) S -->
                                <dl class="row">
                                    <dt>
                                        <label for="">분류</label>
                                    </dt>
                                    <dd>
                                        <div class="inp_bx">
                                            <input type="text" name="category" class="form-control">
                                        </div>
                                    </dd>
                                </dl>
                                <!-- row E -->
                                <!-- row(재고수) S -->
                                <dl class="row">
                                    <dt>
                                        <label for="">재고수</label>
                                    </dt>
                                    <dd>
                                        <div class="inp_bx">
                                            <input type="text" name="unitsInStock" class="form-control">
                                        </div>
                                    </dd>
                                </dl>
                                <!-- row E -->
                                <!-- row(출판일) S -->
                                <dl class="row">
                                    <dt>
                                        <label for="">출판일</label>
                                    </dt>
                                    <dd>
                                        <div class="inp_bx">
                                            <input type="text" name="releaseDate" class="form-control">
                                        </div>
                                    </dd>
                                </dl>
                                <!-- row E -->
                                <!-- row(상태) S -->
                                <dl class="row">
                                    <dt>
                                        <label for="">상태</label>
                                    </dt>
                                    <dd>
                                        <div class="inp_bx rd_bx">
                                            <div class="rd_frm">
                                                <input type="radio" name="condition" value="New" class="form-control" checked> 신규도서
                                            </div>
                                            <div class="rd_frm">
                                                <input type="radio" name="condition" value="Old" class="form-control"> 중고도서
                                            </div>
                                            <div class="rd_frm">
                                                <input type="radio" name="condition" value="EBook" class="form-control"> E-BOOK
                                            </div>
                                        </div>
                                    </dd>
                                </dl>
                                <!-- row E -->
                                <!-- row(이미지) S -->
                                <dl class="row">
                                    <dt>
                                        <label for="">이미지</label>
                                    </dt>
                                    <dd>
                                        <div class="inp_bx">
                                            <input type="file" name="bookImage" class="form-control">
                                        </div>
                                    </dd>
                                </dl>
                                <!-- row E -->
                                <!-- row(등록) S -->
                                <dl class="row">
                                    <dt>
                                        <label for=""></label>
                                    </dt>
                                    <dd>
                                        <div class="inp_bx">
                                            <input type="submit" class="btn_smt" value="등록">
                                        </div>
                                    </dd>
                                </dl>
                                <!-- row E -->
                            </div>
                        </form>
                    </div>
                    <!-- 상품입력 E -->
                </div>
            </div>
        </div>
     </section>
    <!-- 서브컨텐츠 E -->
</main>


<!-- 푸터 S -->
<?php include("../inc/footer.html") ?>
<!-- 푸터 E -->