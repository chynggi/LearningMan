<!DOCTYPE html>
<html>
<head>

        
</head>
<!-- -------------body구분선---------------------------------------------------- -->
<body>	
		
        
        <?php
            require_once ('BoardDaoFunction.php');
            $key = $_GET["board_no"];
            $oneRow = selectOne($key);
            if($row = mysqli_fetch_array($oneRow)){
        ?>

        <br>

        <form action="./board_update_action.php" method="post">
            <table class="table table-bordered"style="width:100%" >
                <tr>
                    <td style="width:150px">글 번호</td>
                    <td style="width:100%">
                    <input type="text" name="board_no" 
                    		value="<?=$row["board_no"]?>" readonly></td> 
                </tr>
                
                <tr>
                    <td style="width:150px">글 제목</td>
                    <td style="width:100%">
                    <input type="text" name="board_title" 
							value="<?=$row["board_title"]?>"></td> 
                </tr>

                <tr>
                    <td style="width:300px">글 내용</td>
                    <td style="width:100%; height: 100%">
                    <!-- texrarea테그 사이에 값을 적는 부분에서 빈공란이 들어가면 안된다. -->
                    <textarea name="board_content" id="content" rows="5"  
                    wrap="hard"><?=trim($row["board_content"])?></textarea></td>
               </tr>
            </table>

        <?php
            }
        ?>
            &nbsp;&nbsp;&nbsp;
            <button class="btn btn-primary" type="submit">글 수정</button>
            
            &nbsp;&nbsp;
            <a class="btn btn-primary" href="./board_list.php"> 리스트로 돌아가기</a>
        </form>
   	
</body>
</html>