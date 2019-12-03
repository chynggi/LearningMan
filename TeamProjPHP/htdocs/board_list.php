<!DOCTYPE html>
<html>
<head>


<script>
$(document).ready(function() {
    $('#example').DataTable({
    	stateSave: true,
    	"scrollX": true,
    	"language": {
            "decimal": ".",
            "thousands": ",",
            "info": "보이는페이지 _PAGE_ / _PAGES_",
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Korean.json"
        },
        "lengthMenu": [[5,10, 15, 20,50, -1], [5,10, 15,20, 50, "All"]]
    });
} );
</script>
       
</head>

<body>
<!-- ----------------------------------------body구분선------------------------------------------- -->   
        
      	<?php 
      	require_once ('BoardDaoFunction.php');
      	$result = selectAll();
      	?>

     <table id="example" class="table table-striped table-bordered"
		style="width: 100%" border="1">
		
		<thead>

			<th>번호</th>
			<th>제목</th>
			<th>사용자</th>
			<th>날짜</th>
			<th>수정</th>
			<th>삭제</th>

		</thead>
		<tbody>
            <?php
            // 반복문을 이용하여 result 변수에 담긴 값을 row변수에
            // 계속 담아서 row변수의 값을 테이블에 출력한다.
            while ($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
    			<td>
                <?=$row["board_no"]?>
                </td>
    			<td>
    			<a href='./board_detail.php?board_no=<?=$row["board_no"]?>'><?=$row["board_title"]?></a>     			
                </td>
    			<td>
                <?=$row["board_user"]?>
                </td>
    			<td>
                <?=$row["board_date"]?>
                </td>
                <td><a href='./board_update_form.php?board_no=<?=$row["board_no"]?>'>수정</a></td>
                <td><a href='./board_delete_form.php?board_no=<?=$row["board_no"]?>'>삭제</a></td>               
            </tr>
             <?php
            } // 와일루프 종료
            ?>
            
        </tbody>
        </table>


		
</body>

</html>