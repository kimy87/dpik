<?php include('header.php'); ?>
<?php
require_once __DIR__ . '/captcha/autoload.php';


$siteKey = '6LeBAg0TAAAAABkDmTVwFIRg5ZofqFokVzWe3bRI';
$secret = '6LeBAg0TAAAAAAjh1np39Y4UoXIaKENmZtpUEZxF';
$lang = 'en';
?>

<br>
<div style="position:relative;float:left;">

<table border="1" width="900">

<tr>
<td width="45%" style="color:6D6E70;font-family: 'PT Sans', sans-serif;">
<br><br>
<span style="font-size:18px;padding-left:30px;color:#6D6E70;">We're easy to reach</span><br><br>

<span style="font-size:15px;line-height:20px;">Communication is an important part of "getting it right." If you have a question, concern, or would simply like to send a message, please use the form below or call our office.</span>
<br><br>
<?php
if (isset($_POST['g-recaptcha-response']))
{
	 //var_export($_POST); 
	 $recaptcha = new \ReCaptcha\ReCaptcha($secret);
	 $resp = $recaptcha->verify($_POST['g-recaptcha-response']);
	 if ($resp->isSuccess())
	{
		$nama=$_POST['nama'];
		$email=$_POST['email'];
		$subject=$_POST['subject'];
		$comment=$_POST['comment'];
		$self=$_POST['self'];
		$intended=$_POST['intended'];
		if($nama=="" || $email=="" || $subject=="" || $comment=="")
		{
			echo"Sila penuhkan maklumat";
		}
		else
		{
			if($self=="on")
			{
				
				echo"Terima kasih, Borang anda telah berjaya dihantar.<br>";
				if($intended=="kn")
				{
					$recipient = "paihkimy@gmail.com";
				}
				else if($intended=="pm")
				{
					$recipient = "uchiha.hakimi@gmail.com";
				}
				else
				{
					$recipient = "md_faizhakimi@yahoo.com";
				}
				
				$subject2 = "DPIK: $subject";
				$mailheader = "From: $email \r\n";
				
				$formcontent="Nama: $nama \n";
				$formcontent.="Comment: $comment \n\n";
				
				echo"<br>Nama: $nama<br>Email: $email<br>Subjek: $subject<br>Komen: $comment";
				mail($recipient, $subject2, $formcontent, $mailheader) or die("Error!");
				mail($email, $subject2, $formcontent, $mailheader) or die("Error!");
				
			}
			else
			{
				
				echo"Terima kasih, Borang anda telah berjaya dihantar.<br>";
				if($intended=="kn")
				{
					$recipient = "paihkimy@gmail.com";
				}
				else if($intended=="pm")
				{
					$recipient = "uchiha.hakimi@gmail.com";
				}
				else
				{
					$recipient = "md_faizhakimi@yahoo.com";
				}
				
				$subject2 = "DPIK: $subject";
				$mailheader = "From: $email \r\n";
				
				$formcontent="Nama: $nama \n";
				$formcontent.="Comment: $comment \n\n";
				
				echo"<br>Nama: $nama<br>Email: $email<br>Subjek: $subject<br>Komen: $comment";
				mail($recipient, $subject2, $formcontent, $mailheader) or die("Error!");
			}
		}
	}
	else
	{
		echo"Sila masukan Captcha dengan betul.<br><a href=''>Kembali</a><br><br>";
	}
}
else
{
?>
<form method="post" action="">
<span style="font-size:15px;line-height:20px;">
Please choose intended recipient*:<br><br>
<input type="radio" name="intended" value="kn" checked>DPIK Konsult<br>
<input type="radio" name="intended" value="pm">DPIK Project Management<br>
<input type="radio" name="intended" value="ge">General enquiry<br>
<br>
</span>
<div style=" border-radius: 25px;border: 1px solid #6d6e70;padding: 20px;width: 400px;height: 265px;">
<fieldset style="font-family: 'PT Sans', sans-serif;background-color:#fff;display:inline;padding:5px;border-color:#6d6e70;">
<label>Name*</label><br>
<input type="text" name="nama" value="" size="40" style="border: 1px solid #6d6e70;height:25px;"><br><br>

<label>Email*</label><br>
<input type="text" name="email" value="" size="40" style="border: 1px solid #6d6e70;height:25px;"><br><br>

<label>Subject*</label><br>
<input type="text" name="subject" value="" size="40" style="border: 1px solid #6d6e70;height:25px;"><br><br>

<label>Question/Comment*</label><br>
<textarea name="comment" rows="4" cols="45" style="border: 1px solid #6d6e70;"></textarea><br><br>
</fieldset>
</div>
<br>

Send a copy to yourself <input type="checkbox" name="self" /><br><br>
<center>
<div class="g-recaptcha" data-sitekey="6LeBAg0TAAAAABkDmTVwFIRg5ZofqFokVzWe3bRI"></div>
<input type="hidden" name="secret" value="6LeBAg0TAAAAAAjh1np39Y4UoXIaKENmZtpUEZxF">
<input type="submit" value="Send" style="font-family: 'PT Sans', sans-serif;background-color:#1d63ae;color:#fff;border:none;width:90px;height:30px;">
</center>
</form>
<br><br>
<?php
}
?>
</td>
<td width="10%">&nbsp;</td>
<td width="45%" style="color:6D6E70;font-family: 'PT Sans', sans-serif;">
<br><br><br><br>
<span style="font-size:18px;padding-bottom:5px;">DPI KONSULT SDN BHD</span><br><br>
<span style="font-size:15px;line-height:20px;">
Suite 733, Block A, Kelana Jaya Centre Point,<br>
3 Jalan SS 7/19 Kelana Jaya<br>
47310 Petaling Jaya<br>
Selangor Darul Ehsan, MALAYSIA<br><br>

Email&nbsp;&nbsp;: hilmi@dpik.com.my<br>
Phone&nbsp;: +603 7803 8189<br>
Fax&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: +603 7803 2319<br><br>
</span>
<br>
<span style="font-size:18px;padding-bottom:5px;">DPIK PROJECT MANAGEMENT SDN BHD</span><br><br>
<span style="font-size:15px;line-height:20px;">
Suite 746, Block A, Kelana Jaya Centre Point,<br>
3 Jalan SS 7/19 Kelana Jaya<br>
47310 Petaling Jaya<br>
Selangor Darul Ehsan, MALAYSIA<br><br>

Email&nbsp;&nbsp;: nhashim@dpik.com.my<br>
Phone&nbsp;: +603 7803 8189<br>
Fax&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: +603 7803 2319<br><br>
</span>
<br>
<a href="https://goo.gl/maps/OkrRL" target="_blank" style="color:#1d63ae;text-decoration:none;">View the map <img src="img/arrow-icon.png" /></a>
</span>


	



</td>
</tr>

</table>

</div>



<?php include('footer.php'); ?>