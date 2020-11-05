<html lang="en">
<head>
    <title>JRY Train</title>
    <link rel = "stylesheet" type = "text/css" 
	href = "<?php echo base_url(); ?>css/trainshow.css">
</head>
<body>
    <div class="add-button">
        <a href="../welcome/home" >เพิ่มรอบรถ</a>
    </div>
<table>
    
    <tr id="row1">
        <td>ขบวน</td>
        <td>สถานี</td>
        <td>เวลาออก</td>

        <td>ถึง</td>
        <td>ออก</td>

        <td>สถานี</td>
        <td>ถึงเวลา</td>
        <td>หมายเหตุ</td>
    </tr>
    <?php
        foreach($TM as $row){
    ?>
    <tr id="row2">
        <td><center><?=$row->Train_ID;?></center></td>

        <td><center><?=$row->Ton_Station?></center></td>

        <td><center><?=$row->Timeout?></center></td>

        <td><center><?=$row->TongTime?></center></td>

        <td><center><?=$row->Timeout?></center></td>

        <td><center><?=$row->Pay_Station?></center></td>

        <td><center><?=$row->Tongtime?></center></td>
        
	    <td><center><?=$row->Status?></center></td>
    </tr>
    <?php
     }
    ?>
</table>
</body>
</html>