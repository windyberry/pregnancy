<!DOCTYPE html>
<html>
<head>
<html lang="en">
<meta charset=utf-8>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=0" />
<title>ตั้งครรภ์</title>
  <link rel="shortcut icon" type="image/png" href="http://www.windygallery.com/baby/pregnancy.ico"/>
  <meta property="og:site_name" content="@windygallery">
  <meta property="og:description" content="Birth estimation">
  <meta property="og:image" content="http://www.windygallery.com/baby/pregnancy.png" >
  <meta property="og:image:width" content="512">
  <meta property="og:image:height" content="512">
  <meta property="og:url" content="http://www.windygallery.com/baby/index.php">

<link href='http://fonts.googleapis.com/css?family=Roboto:300'
rel='stylesheet' type='text/css'>
<style>

body {
  font-family: 'Roboto', sans-serif; background: #EEEEEE;
  font-size: 14px;
  color: #222222;
}
.highlight {
  font-family: 'Roboto', sans-serif; background: #ffffff;
  font-size: 21px;
  font-weight: bold;
  color: #111111;
  padding: 10px; margin: 15px;
}
.maxhighlight {
  font-family: 'Roboto', sans-serif; background: #ffffff;
  font-size: 40px;
  font-weight: bold;
  color: #000000;
  padding: 10px; margin: 15px;
}
input[type='text']  {
  font-family: 'Roboto', sans-serif;
  font-size: 26px;
  color: #000000;
  width: 240px; padding: 8px; margin: 4px;
}

.btn {
  -webkit-border-radius: 5;
  -moz-border-radius: 5;
    color:#FFFFFF;
    background: #8BC34A;
  border-radius: 5px;
  font-family: Arial;
  font-size: 20px;
  padding: 10px;
  text-decoration: none;
  width: 160px;
}
.small { color:#666666; font-size: 0.9em; }
.dark {
  font-family: 'Roboto', sans-serif; background: #ffffff;
  font-size: 18px;
  font-weight: bold;
  color:#111111;
  padding: 8px; margin: 4px;
}
.footer { color:#03A9F4; font-size: 0.9em; }
</style>
</head>
<body><center>
<img src="pregnancy.png" height="80"><br>
<br>
<form action="index.php" method="post">
ประจำเดือนวันแรกครั้งสุดท้าย:<br>

<?
  $placeholder = date('Y/m/d');
  $startdate   = date('Y/m/d');
  if (isset($_POST["lastmenstruation"])) {
      $startdate = $_POST["lastmenstruation"];
  }
?>
<input type="text" name="lastmenstruation" placeholder="<?=$placeholder;?>"
value="<?=$startdate;?>"><br>
<div class="small">ใส่ข้อมูลในรูปแบบ ปีค.ศ./เดือน/วัน เช่น 2017/12/31</div><br>
<input type="submit" class="btn" value="คำนวณ">
</form><br>
<?
if (isset($_POST["lastmenstruation"])) {
    $nowdate   = strtotime(date('Y/m/d'));
    $datediff  = $nowdate - strtotime($_POST["lastmenstruation"]);
    if ($datediff > 0) { //&& ($datediff < 300)) {
      $daydiff = round($datediff/ (60 * 60 * 24));
      $week    = floor($daydiff/7);
      $day     = $daydiff%7;
      echo "<div class='small'>ขณะนี้ท่านมีอายุครรภ์</div>";
      //echo "<div class='maxhighlight'>".$week." วีค, ".$day." วัน ($daydiff วัน)</div>\n";
      echo "<div class='maxhighlight'>".$week." วีค, ".$day." วัน</div>\n";
    }
    $datebuild  = date('l d F Y', strtotime("$startdate +35 days"));
    $datebuilt  = date('l d F Y', strtotime("$startdate +70 days"));
    $datesafe   = date('l d F Y', strtotime("$startdate +84 days"));
    $datetest   = date('l d F Y', strtotime("$startdate +119 days"));
    $date37     = date('l d F Y', strtotime("$startdate +259 days"));
    $date40     = date('l d F Y', strtotime("$startdate +280 days"));

    echo "<div class='small'>ทารกสร้างอวัยวะสำคัญ</div>".$datebuild."<br><br>\n";
    echo "<div class='small'>อวัยวะสำคัญสร้างเสร็จ</div>".$datebuilt."<br><br>\n";
    echo "<div class='small'>ความเสี่ยงในการตั้งครรภ์ลดลง</div>".$datesafe."<br><br>\n";
    echo "<div class='dark'>17 วีค (กรณีเจาะน้ำคร่ำ)<br>".$datetest."</div>\n";
    echo "<div class='small'>ครบ 37 วีค</div>".$date37."<br>\n";
    echo "<div class='highlight'>กำหนดคลอด (40 วีค)<br>".$date40."</div>\n";
}
?>
<br>
<u>หมายเหตุ</u>  อนุญาตให้นำไปใช้เพื่อประโยชน์ของว่าที่คุณแม่<br>
และอำนวยความสะดวกของผู้ให้บริการทางการแพทย์<br>
ได้ทุกกรณีโดยไม่มีค่าใช้จ่ายใดๆครับ/รวินทร์<br><br>

หากท่านใด สนใจบริจาคเพื่อการพัฒนา ขอแนะนำให้<br>บริจาคไปให้กับ
<a href="http://www.givetochild.com/" target="_blank">มูลนิธิโรงพยาบาลเด็ก</a> แทนนะครับ :)<br><br>

<div class="footer">
ถ้ามี feedback อยากให้ปรับปรุงแก้ไขเพิ่มเติม<br>
ส่ง email มาแจ้งได้ที่ <a href="mailto:windyberry2gmail.com">windyberry@gmail.com</a> ครับ
<br><br>
<div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a><br>
from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a>
</div>
</div>
<br><br>
</center>
</html>
</body>
