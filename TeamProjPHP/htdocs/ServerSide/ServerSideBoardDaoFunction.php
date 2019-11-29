<?php
function dbConnect(){
    $tns = "
    (DESCRIPTION = (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)
    (HOST = 192.168.0.24)(PORT = 1521)) )
    (CONNECT_DATA = (SERVICE_NAME = xe) )
 ) ";
    try {
        $conn = new PDO("oci:dbname=".$tns.";charset=utf8", "team", "team");
    } catch (PDOException $e) {
        echo "Failed to obtain database handle " . $e->getMessage();
    }
}
function insert()
{
    $board_title     = $_POST["board_title"];
    $board_content   = $_POST["board_content"];
    $board_user      = $_POST["board_user"];
    echo "board_title : "    . $board_title     . "<br>";
    echo "board_content : "  . $board_content   . "<br>";
    echo "board_user : "     . $board_user      . "<br>";
    // mysql 커넥션 객체 생성
    $conn = dbConnect();
    // board 테이블에 입력된 값을 1행에 넣고 board_date 필드에는 현재 시간을 입력하는 쿼리
    $pdoStatement = $conn -> prepare("INSERT INTO ssboard (no, title, content, id, xdate)
        values (SSBOARD_SEQ.NEXTVAL,?,?,?,now())");
    $pdoStatement -> bindValue(1, $board_title);
    $pdoStatement -> bindValue(2, $board_content);
    $pdoStatement -> bindValue(3, $board_user);
    $pdoStatement -> execute();
}

function delete(){
    
    // board_delete_form.php 페이지에서 넘어온 글 번호값 저장 및 출력
    $board_no = $_POST["board_no"];
    echo "board_no : " . $board_no . "<br>";
    $conn = dbConnect();
    // board테이블에서 입력된 글 번호와, 글 비밀번호가 일치하는 행 삭제 쿼리
    try {
        // 삭제대상자료가 있는 지 확인
        $pdoStatement = $conn -> prepare("SELECT * FROM board WHERE board_no= :no");
        $pdoStatement -> bindValue(":no", $board_no);
        $pdoStatement -> execute();
        // 패스워드가 맞는 해당 자료가 있으면
        if ($row = $pdoStatement -> fetch()) {
            // 지우는 작업            
            $pdoStatement = $conn -> prepare("DELETE FROM board WHERE board_no= :no");
            $pdoStatement -> bindValue(":no", $board_no);
            $pdoStatement -> execute();                
        }
        // 패스워드가 맞는 해당 자료가 없으면
        else {
            echo "삭제 실패! ";
        }       
    } catch (Exception $e) {
        echo "삭제 실패: " . PDO::errorInfo;
        $s = $e->getMessage() . '(오류코드:' . $e->getCode() . ')';
        echo $e;
    }
    
    
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
    $pdoStatement = $conn -> prepare("UPDATE ssboard SET board_title=? ,board_content=? WHERE board_no=?)");
    $pdoStatement -> bindValue(1, $board_title);
    $pdoStatement -> bindValue(2, $board_content);
    $pdoStatement -> bindValue(3, $board_no);
    $pdoStatement -> execute();
            //헤더를 이용한 리다이렉션 구현
            header("Location: ./board_list.php");
}
function selectAll(){
    $conn = dbConnect();
    $pdoStatement = $conn -> prepare("SELECT board_no, board_title, board_user, board_date FROM board order by board_no desc");
    $results = $pdoStatement -> fetchAll();
    return $results;
}
function selectOne($key){
    $conn = dbConnect();
    $pdoStatement = $conn -> prepare("SELECT board_no, board_title, board_user, board_date, board_content FROM board where board_no=?");
    $pdoStatement -> bindValue(1, $key);
    $oneRow = $pdoStatement -> fetch();
    return $oneRow;
}
?>