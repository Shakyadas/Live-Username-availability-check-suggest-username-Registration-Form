
<style>
.green{color:#2FC332;}
.red{color:#D60202;font-weight: bold}
.g{color:green;
	font-style: italic;text-decoration: underline;}	
</style>
<?php

$link=mysqli_connect("localhost","root","","live") or die("Database can not be connected."); 

if(!empty($_POST['username'])){
	
	
	$result=mysqli_query($link,"select * from reg where username='".$_POST["username"]."'") or die("failed to query database".mysqli_error($link));
	if(mysqli_num_rows($result)>0)
	{
		echo "<span class='glyphicon glyphicon-remove red'> Username Not Available. </span>";
		$v=$_POST["username"].mt_rand(0,10000);
		
		$select = mysqli_query($link,"select * from reg where username='$v'");
		{
		if(mysqli_num_rows($select)>0)
		{
		$vv=$_POST["username"].mt_rand(0,50000);
		$select2 = mysqli_query($link,"select * from reg where username='$vv'");
		{
		if(mysqli_num_rows($select2)>0)
		{
		$vvv=$_POST["username"].mt_rand(0,100000);
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbs&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='g'> Try This name= &#39; $vvv &#39; </span>";
		
		echo "<script>document.getElementById('lsname').style.display='none'</script>";
		echo "<script>document.getElementById('sname').style.display='none'</script>";
		echo "<script>document.getElementById('lpass').style.display='none'</script>";
		echo "<script>document.getElementById('pdiv').style.display='none'</script>";
		echo "<script>document.getElementById('lgender').style.display='none'</script>";
		echo "<script>document.getElementById('lmale').style.display='none'</script>";
		echo "<script>document.getElementById('male').style.display='none'</script>";
		echo "<script>document.getElementById('lfemale').style.display='none'</script>";
		echo "<script>document.getElementById('female').style.display='none'</script>";
		echo "<script>document.getElementById('lothers').style.display='none'</script>";
		echo "<script>document.getElementById('others').style.display='none'</script>";
		echo "<script>document.getElementById('lmob').style.display='none'</script>";
		echo "<script>document.getElementById('mob').style.display='none'</script>";
		echo "<script>document.getElementById('mobb').style.display='none'</script>";
		echo "<script>document.getElementById('lmail').style.display='none'</script>";
		echo "<script>document.getElementById('mail').style.display='none'</script>";
		echo "<script>document.getElementById('lcity').style.display='none'</script>";
		echo "<script>document.getElementById('city').style.display='none'</script>";
		echo "<script>document.getElementById('lb1').style.display='none'</script>";
		echo "<script>document.getElementById('lb2').style.display='none'</script>";	
		echo "<script>document.getElementById('pname').style.display='none'</script>";
		echo "<script>document.getElementById('marriael').style.display='none'</script>";
		echo "<script>document.getElementById('marriage').style.display='none'</script>";
		echo "<script>document.getElementById('addr').style.display='none'</script>";
		echo "<script>document.getElementById('lphoto').style.display='none'</script>";
		echo "<script>document.getElementById('photo').style.display='none'</script>";
		echo "<script>document.getElementById('alertphoto').style.display='none'</script>";
		echo "<script>document.getElementById('submit').style.display='none'</script>";
		
		
		
		}
	else{		
		
		echo "<script>document.getElementById('lsname').style.display='none'</script>";
		echo "<script>document.getElementById('sname').style.display='none'</script>";
		echo "<script>document.getElementById('lpass').style.display='none'</script>";
		echo "<script>document.getElementById('pdiv').style.display='none'</script>";
		echo "<script>document.getElementById('lgender').style.display='none'</script>";
		echo "<script>document.getElementById('lmale').style.display='none'</script>";
		echo "<script>document.getElementById('male').style.display='none'</script>";
		echo "<script>document.getElementById('lfemale').style.display='none'</script>";
		echo "<script>document.getElementById('female').style.display='none'</script>";
		echo "<script>document.getElementById('lothers').style.display='none'</script>";
		echo "<script>document.getElementById('others').style.display='none'</script>";
		echo "<script>document.getElementById('lmob').style.display='none'</script>";
		echo "<script>document.getElementById('mob').style.display='none'</script>";
		echo "<script>document.getElementById('mobb').style.display='none'</script>";
		echo "<script>document.getElementById('lmail').style.display='none'</script>";
		echo "<script>document.getElementById('mail').style.display='none'</script>";
		echo "<script>document.getElementById('lcity').style.display='none'</script>";
		echo "<script>document.getElementById('city').style.display='none'</script>";
		echo "<script>document.getElementById('lb1').style.display='none'</script>";
		echo "<script>document.getElementById('lb2').style.display='none'</script>";	
		echo "<script>document.getElementById('pname').style.display='none'</script>";
		echo "<script>document.getElementById('marriael').style.display='none'</script>";
		echo "<script>document.getElementById('marriage').style.display='none'</script>";
		echo "<script>document.getElementById('addr').style.display='none'</script>";
		echo "<script>document.getElementById('lphoto').style.display='none'</script>";
		echo "<script>document.getElementById('photo').style.display='none'</script>";
		echo "<script>document.getElementById('alertphoto').style.display='none'</script>";
		echo "<script>document.getElementById('submit').style.display='none'</script>";
		
		
		}
		
		}
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='g'>Try This name= &#39; $vv &#39; </span>";
		
		echo "<script>document.getElementById('lsname').style.display='none'</script>";
		echo "<script>document.getElementById('sname').style.display='none'</script>";
		echo "<script>document.getElementById('lpass').style.display='none'</script>";
		echo "<script>document.getElementById('pdiv').style.display='none'</script>";
		echo "<script>document.getElementById('lgender').style.display='none'</script>";
		echo "<script>document.getElementById('lmale').style.display='none'</script>";
		echo "<script>document.getElementById('male').style.display='none'</script>";
		echo "<script>document.getElementById('lfemale').style.display='none'</script>";
		echo "<script>document.getElementById('female').style.display='none'</script>";
		echo "<script>document.getElementById('lothers').style.display='none'</script>";
		echo "<script>document.getElementById('others').style.display='none'</script>";
		echo "<script>document.getElementById('lmob').style.display='none'</script>";
		echo "<script>document.getElementById('mob').style.display='none'</script>";
		echo "<script>document.getElementById('mobb').style.display='none'</script>";
		echo "<script>document.getElementById('lmail').style.display='none'</script>";
		echo "<script>document.getElementById('mail').style.display='none'</script>";
		echo "<script>document.getElementById('lcity').style.display='none'</script>";
		echo "<script>document.getElementById('city').style.display='none'</script>";
		echo "<script>document.getElementById('lb1').style.display='none'</script>";
		echo "<script>document.getElementById('lb2').style.display='none'</script>";	
		echo "<script>document.getElementById('pname').style.display='none'</script>";
		echo "<script>document.getElementById('marriael').style.display='none'</script>";
		echo "<script>document.getElementById('marriage').style.display='none'</script>";
		echo "<script>document.getElementById('addr').style.display='none'</script>";
		echo "<script>document.getElementById('lphoto').style.display='none'</script>";
		echo "<script>document.getElementById('photo').style.display='none'</script>";
		echo "<script>document.getElementById('alertphoto').style.display='none'</script>";
		echo "<script>document.getElementById('submit').style.display='none'</script>";
		
		}
		else
		{
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='g'> Try This name= &#39; $v &#39; </span>";
		
		echo "<script>document.getElementById('lsname').style.display='none'</script>";
		echo "<script>document.getElementById('sname').style.display='none'</script>";
		echo "<script>document.getElementById('lpass').style.display='none'</script>";
		echo "<script>document.getElementById('pdiv').style.display='none'</script>";
		echo "<script>document.getElementById('lgender').style.display='none'</script>";
		echo "<script>document.getElementById('lmale').style.display='none'</script>";
		echo "<script>document.getElementById('male').style.display='none'</script>";
		echo "<script>document.getElementById('lfemale').style.display='none'</script>";
		echo "<script>document.getElementById('female').style.display='none'</script>";
		echo "<script>document.getElementById('lothers').style.display='none'</script>";
		echo "<script>document.getElementById('others').style.display='none'</script>";
		echo "<script>document.getElementById('lmob').style.display='none'</script>";
		echo "<script>document.getElementById('mob').style.display='none'</script>";
		echo "<script>document.getElementById('mobb').style.display='none'</script>";
		echo "<script>document.getElementById('lmail').style.display='none'</script>";
		echo "<script>document.getElementById('mail').style.display='none'</script>";
		echo "<script>document.getElementById('lcity').style.display='none'</script>";
		echo "<script>document.getElementById('city').style.display='none'</script>";
		echo "<script>document.getElementById('lb1').style.display='none'</script>";
		echo "<script>document.getElementById('lb2').style.display='none'</script>";	
		echo "<script>document.getElementById('pname').style.display='none'</script>";
		echo "<script>document.getElementById('marriael').style.display='none'</script>";
		echo "<script>document.getElementById('marriage').style.display='none'</script>";
		echo "<script>document.getElementById('addr').style.display='none'</script>";
		echo "<script>document.getElementById('lphoto').style.display='none'</script>";
		echo "<script>document.getElementById('photo').style.display='none'</script>";
		echo "<script>document.getElementById('alertphoto').style.display='none'</script>";
		echo "<script>document.getElementById('submit').style.display='none'</script>";
		}
		}
	}
	else
	{
		echo "<span class='glyphicon glyphicon-ok g'>Username Available.</span>";	
		
		echo "<script>document.getElementById('lsname').style.display='block'</script>";
		echo "<script>document.getElementById('sname').style.display='block'</script>";
		echo "<script>document.getElementById('lpass').style.display='block'</script>";
		echo "<script>document.getElementById('pdiv').style.display='block'</script>";
		echo "<script>document.getElementById('lgender').style.display='block'</script>";
		echo "<script>document.getElementById('lmale').style.display='block'</script>";
		echo "<script>document.getElementById('male').style.display='block'</script>";
		echo "<script>document.getElementById('lfemale').style.display='block'</script>";
		echo "<script>document.getElementById('female').style.display='block'</script>";
		echo "<script>document.getElementById('lothers').style.display='block'</script>";
		echo "<script>document.getElementById('others').style.display='block'</script>";
		echo "<script>document.getElementById('lmob').style.display='block'</script>";
		echo "<script>document.getElementById('mob').style.display='block'</script>";
		echo "<script>document.getElementById('mobb').style.display='block'</script>";
		echo "<script>document.getElementById('lmail').style.display='block'</script>";
		echo "<script>document.getElementById('mail').style.display='block'</script>";
		echo "<script>document.getElementById('lcity').style.display='block'</script>";
		echo "<script>document.getElementById('city').style.display='block'</script>";
		echo "<script>document.getElementById('addr').style.display='block'</script>";
		echo "<script>document.getElementById('lphoto').style.display='block'</script>";
		echo "<script>document.getElementById('photo').style.display='block'</script>";
		echo "<script>document.getElementById('alertphoto').style.display='block'</script>";
		echo "<script>document.getElementById('submit').style.display='block'</script>";
		
		
	}
	
	
}


else
{
		
		echo "<script>document.getElementById('lsname').style.display='none'</script>";
		echo "<script>document.getElementById('sname').style.display='none'</script>";
		echo "<script>document.getElementById('lpass').style.display='none'</script>";
		echo "<script>document.getElementById('pdiv').style.display='none'</script>";
		echo "<script>document.getElementById('lgender').style.display='none'</script>";
		echo "<script>document.getElementById('lmale').style.display='none'</script>";
		echo "<script>document.getElementById('male').style.display='none'</script>";
		echo "<script>document.getElementById('lfemale').style.display='none'</script>";
		echo "<script>document.getElementById('female').style.display='none'</script>";
		echo "<script>document.getElementById('lothers').style.display='none'</script>";
		echo "<script>document.getElementById('others').style.display='none'</script>";
		echo "<script>document.getElementById('lmob').style.display='none'</script>";
		echo "<script>document.getElementById('mob').style.display='none'</script>";
		echo "<script>document.getElementById('mobb').style.display='none'</script>";
		echo "<script>document.getElementById('lmail').style.display='none'</script>";
		echo "<script>document.getElementById('mail').style.display='none'</script>";
		echo "<script>document.getElementById('lcity').style.display='none'</script>";
		echo "<script>document.getElementById('city').style.display='none'</script>";
		echo "<script>document.getElementById('lb1').style.display='none'</script>";
		echo "<script>document.getElementById('lb2').style.display='none'</script>";	
		echo "<script>document.getElementById('pname').style.display='none'</script>";
		echo "<script>document.getElementById('marriael').style.display='none'</script>";
		echo "<script>document.getElementById('marriage').style.display='none'</script>";
		echo "<script>document.getElementById('addr').style.display='none'</script>";
		echo "<script>document.getElementById('lphoto').style.display='none'</script>";
		echo "<script>document.getElementById('photo').style.display='none'</script>";
		echo "<script>document.getElementById('alertphoto').style.display='none'</script>";
		echo "<script>document.getElementById('submit').style.display='none'</script>";
		
}

?>