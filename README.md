# 책 쇼핑몰 구현
php학습을 하며 언어를 활용하여 도서 쇼핑몰 제작 하였습니다.

/* INDEX */
- php Setting
- Variable, Constant, data_type, operator
- Conditional Statement, Loop,
- Array
- Function
- HTTP, GET, POST
- FORM
- File Upload
- Validation
- Exaption Handling
- Session
- Cookie
- DataBase
- Prouduct View, Register, Edit, Deleate
- Login, Logout, Notice, Join


/* 사용된 언어 */
- HTML
- CSS
- JavaScript
- Jquery
- PHP


/* 1차 작업 */(2025.05.11)
- 기본 HTML(헤더, 메인, 푸터), CSS(반응형) 구조 및 스타일링 작업
- 배열로 도서 반복 (PHP)


/* 2차 작업 */(2025.05.17)
- 함수학습후 적용 include나 global함수, 배열활용 도서 목록 출력
- GET,POST,REQUEST방식을 알고 페이지 이동시 정보전송
- 신규도서추가 페이지 작업(오류발생되어서 작업중)
/++
    (기존코드)
    $newBook["name"] = $name;
    $newBook["unitPrice"] = $unitPrice;
    $newBook = $_POST["author"];   <<< 이부분이 잘못됨
    $newBook["description"] = $description;
    $newBook["category"] = $category;
    $newBook["unitsInStock"] = $unitsInStock;
    $newBook["releaseDate"] = $releaseDate;
    $newBook["condition"] = $condition;

   (수정코드)
    $newBook["name"] = $name;
    $newBook["unitPrice"] = $unitPrice;
    $newBook["author"] = $author; <<< 수정된 코드
    $newBook["description"] = $description;
    $newBook["category"] = $category;
    $newBook["unitsInStock"] = $unitsInStock;
    $newBook["releaseDate"] = $releaseDate;
    $newBook["condition"] = $condition;
배열이 아닌 단순 문자열로 사용해서 오류남, 변수배열로 저장하고난뒤 오류해결됨
++/


/* 3차 작업 */(2025.05.29)
- 데이터베이스 학습 및 적용작업

/* 4차 작업 */(2025.05.29 ~ 06.01)
- 파일열기/닫기/쓰기/제어 학습
- 도서 이미지를 다운로드 할수있게 영영 구조 및 스타일 작업 / PHP 작업(파일일기/쓰기/저장/다운로드)

