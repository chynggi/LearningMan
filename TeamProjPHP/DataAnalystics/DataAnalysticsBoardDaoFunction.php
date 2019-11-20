<?php
function dbConnect(){
    // mysql 커넥션 객체 생성
    $conn = mysqli_connect("localhost", "root", "", "test");
    // 커넥션 객체 생성 여부 확인
    if ($conn) {
        echo "연결 성공<br>";
        return $conn;
    } else {
        die("연결 실패 : " . mysqli_error());
    }
}
function dbConfirm($result){
    // 쿼리 실행 여부 확인
    if ($result) {
        echo "작업 성공: " . $result; // 과제 작성시 에러메시지 출력하게 만들기
    } else {
        echo "작업 실패: " . mysqli_error($conn);
    }
}
function insert()
{
    $board_pw        = $_POST["board_pw"];
    $board_title     = $_POST["board_title"];
    $board_content   = $_POST["board_content"];
    $board_user      = $_POST["board_user"];
    echo "board_pw : "       . $board_pw        . "<br>";
    echo "board_title : "    . $board_title     . "<br>";
    echo "board_content : "  . $board_content   . "<br>";
    echo "board_user : "     . $board_user      . "<br>";
    // mysql 커넥션 객체 생성
    $conn = dbConnect();
    // board 테이블에 입력된 값을 1행에 넣고 board_date 필드에는 현재 시간을 입력하는 쿼리
    $sql = "INSERT INTO board (board_pw, board_title, board_content, board_user, board_date)
            values ('" . $board_pw . "','" . $board_title . "','" . $board_content . "','" . $board_user . "',now())";
    $result = mysqli_query($conn, $sql);
    dbConfirm($result);
    mysqli_close($conn);
}

function delete(){
    
    // board_delete_form.php 페이지에서 넘어온 글 번호값 저장 및 출력
    $board_no = $_POST["board_no"];
    $board_pw = $_POST["board_pw"];
    echo "board_no : " . $board_no . "<br>";
    echo "board_pw : " . $board_pw . "<br>";
    $conn = dbConnect();
    // board테이블에서 입력된 글 번호와, 글 비밀번호가 일치하는 행 삭제 쿼리
    try {
        // 삭제대상자료가 있는 지 확인
        $selectSql = "SELECT * FROM board WHERE board_pw='" . $board_pw
        . "' AND board_no=" . $board_no . "";
        $result = mysqli_query($conn, $selectSql);
        // 패스워드가 맞는 해당 자료가 있으면
        if ($row = mysqli_fetch_array($result)) {
            // 지우는 작업
            $deleteSql = "DELETE FROM board WHERE board_pw='". $board_pw . "' AND board_no=" . $board_no . "";
                $res = mysqli_query($conn, $deleteSql);
                echo "삭제 성공: " . $deleteSql . ":" . "실행완료~~";
        }
        // 패스워드가 맞는 해당 자료가 없으면
        else {
            echo "삭제 실패! ";
        }       
    } catch (Exception $e) {
        echo "삭제 실패: " . mysqli_error($conn);
        $s = $e->getMessage() . '(오류코드:' . $e->getCode() . ')';
        echo $e;
    }
    
    mysqli_close($conn);
    // 헤더함수를 이용하여 리스트 페이지로 리다이렉션 -> 테스트후에는 아랫줄 주석을 해제 합니다.
    header("Location: ./board_list.php");
}
function update(){
    //board_update_form.php에서 POST 방식으로 넘어온 값 저장 및 출력
    $board_no       = $_POST["board_no"];
    $board_title    = $_POST["board_title"];
    $board_content  = $_POST["board_content"];
    echo "board_no : "      . $board_no      . "<br>";
    echo "board_title : "   . $board_title   . "<br>";
    echo "board_content : " . $board_content . "<br>";
    //커넥션 객체 생성 및 연결 여부 확인하기
    $conn = dbConnect();
    $sql = "UPDATE board SET board_title='".$board_title."',board_content='".$board_content."',board_date=now() WHERE board_no=".$board_no."";           
            $result = mysqli_query($conn,$sql);
            dbConfirm($result);
            mysqli_close($conn);
            //헤더를 이용한 리다이렉션 구현
            header("Location: ./board_list.php");
}
function selectAll(){
    $conn = dbConnect();
    $sql = "SELECT board_no, board_title, board_user, board_date FROM board order by board_no desc";
    $results = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $results;
}
function selectOne($key){
    $conn = dbConnect();
    $sql = "SELECT board_no, board_title, board_user, board_date, board_content FROM board where board_no='".$key."'";
    $oneRow = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $oneRow;
}
?>