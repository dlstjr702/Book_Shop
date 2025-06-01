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
                    <div id="shp_prd_list">
                        <div class="hd"></div>
                        <div class="bd">
                            <ul class="prd_list">
                                <?php

                                  $bookId = $_POST["bookId"];
                                  $name = $_POST["name"];
                                  $unitPrice = $_POST["unitPrice"];
                                  $author = $_POST["author"];
                                  $description = $_POST["description"];
                                  $category = $_POST["category"];
                                  $unitsInStock = $_POST["unitsInStock"];
                                  $releaseDate = $_POST["releaseDate"];
                                  $condition = $_POST["condition"];
                                  $condition = $_FILES["bookImage"]["name"];

                                  $target_path = "resource/imgaes/";


                                  $ext = pathinfo($filename, PATHINFO_EXTENSION);
                                  $filename = $bookId.".".$ext;


                                  if(move_uploaded_file($filename["bookImage"]["tmp_name"],$target_path.$filename)){
                                    $handle = fopen("domain.dat","a");//파일열기
                                    $book_info = "$bookId | $name | $unitPrice | $author | $description | $category | $unitsInStock | $releaseDate | $condition | $filename";
                                    fwrite($handle,"\n".$book_info);
                                    fclose($handle);
                                    Header("Location:books.php");
                                  }else{
                                    echo "파일이 업로드되지 않았습니다. 다시 시동해주세요!";
                                  }


                                  $newBook["name"] = $name;
                                  $newBook["unitPrice"] = $unitPrice;
                                  $newBook["author"] = $author;
                                  $newBook["description"] = $description;
                                  $newBook["category"] = $category;
                                  $newBook["unitsInStock"] = $unitsInStock;
                                  $newBook["releaseDate"] = $releaseDate;
                                  $newBook["condition"] = $condition;


                                 addBook($bookId, $newBook);


                                   $listOfBooks = getAllBooks();
                                   for($i=0;$i<count($listOfBooks);$i++){
                                    $id = key($listOfBooks);
                                    $book = $listOfBooks[$id];
                                    next($listOfBooks);
                                    
                                ?>
                                <li>
                                    <div class="li_ir">
                                        <div class="txt_bx">
                                            <h3 class="prd_tit"><?php echo $book["name"]; ?></h3>
                                            <p class="prd_ath"><?php echo $book["author"]." | ".$book["releaseDate"]; ?></p>
                                            <p class="prd_des"><?php echo mb_substr($book["description"],0,90,'utf-8')."..."; ?></p>
                                            <p class="prd_prc"><?php echo $book["unitPrice"]; ?>원</p>
                                            <div class="btn_bx">
                                                <a href="./book_info.php?id=<?php echo $id; ?>">상세정보</a>
                                            </div>
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