<!DOCTYPE html>
<html lang="en">
<head>
    <title>Go To Train</title>
    <link rel = "stylesheet" type = "text/css" 
	href = "<?php echo base_url(); ?>css/trainadd.css">
</head>
<body>
    <form method="POST" action="../Welcome/add_Train">
        <div class="train">
            <p>ขบวน:</p>
            <input type="text" name="trainidbox">
        </div>

        
            <div class="tontang-layout">
                <p>ต้นทางid:</p>
                <input type="text" name="tonidbox">
                <p>สถานี:</p>
                <input type="text" name="tonstationbox">
                <p>เวลาออก:</p>
                <input type="text" name="tontimeoutbox">
            </div>
        

        
            <div class="tontang-layout">
                <p>ห้วยราชid:</p>
                <input type="text"  name="kangidbox">
                <p>ถึง:</p>
                <input type="text"  name="kangtontimebox">
                <p>ออก:</p>
                <input type="text" name="kangouttimebox">
            </div>
        

        
            <div class="tontang-layout">
                <p>ปลายทางid:</p>
                <input type="text" name="payidbox">
                <p>สถานี:</p>
                <input type="text" name="paystationbox">
                <p>ถึงเวลา:</p>
                <input type="text" name="paytontimebox">
            </div>
        
<br>
        <div class="train">
            <p></p>
             <select name="Statustrainbox" >
                 <option value="1">รถธรรมดา</option>
                 <option value="2">รถดีเซลราง</option>
                 <option value="3">รถด่วนดีเซลราง</option>
             </select>
        </div><br><br>
        <input type="submit" value="add train">
        <div class="back-show">
            <a href="../Welcome/index">back</a>
        </div>
    </form>
</body>
</html>