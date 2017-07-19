<?  
  if (empty($user) || empty($pass) || empty($mail) || empty($country)) { // اذا كان احد الخانات فارغة او أكثر من خانه فارغة  
    echo "<center> البيانات ناقصه - عد لأكمالها"; //a نطبع هذه النتيجه   
}   
else { // اما ما تحقق الشرط أي اذا كانت الخانات ممتلأه نفذ ما يلي  
$db = mysql_connect ("localhost", "db_user", "db_pas") or die ("لم أتمكن من الأتصال بالقاعدة") ; //a أجراء أتصال بالقاعدة  
mysql_select_db("db_name",$db) or die("حدث خطأ بأخيار القاعدة");  
$sql = "INSERT INTO user (username,password,email,city) VALUES ('$user','$pass','$mail','$country')";  
$result = mysql_query($sql);  
echo "<center> شكراً لك تم تسجيلك وهذه هي بياناتك";  
echo"<br></center> اسم المستخدم : $user <br> كلمة المرور : تم أخفائها :) <br> البريد الألكتروني : $mail <br> البلاد : $country <br>";  
echo "<a href=enter.php>الان أضغط هنا لتسجيل دخولك </a>";  
}