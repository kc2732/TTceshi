	<?php
	
	//Connection to database
	//include('dbcon.php');

	
	
	if(empty($fname))
	{
		
	// insert your name , email and text message to your table in db
	$q1 = $_REQUEST['question1'];
    	$q2 = $_REQUEST['question2'];
	$q3 = $_REQUEST['question3'];
    	$q4 = $_REQUEST['question4'];
	$q5 = $_REQUEST['question5'];
    	$q6 = $_REQUEST['question6'];
	$q7 = $_REQUEST['question7'];
    	$q8 = $_REQUEST['question8'];
	$q9 = $_REQUEST['question9'];
	
	$uname = $_REQUEST['uname'];
	$password = $_REQUEST['password'];
	$phone = $_REQUEST['phone'];

	$require1 = $_REQUEST['require1'];
	$require2 = $_REQUEST['require2'];
	$require3 = $_REQUEST['require3'];

	$hostname = 'localhost';
	$un = 'chenkun';
	$pwd = 'chenkun';
	$mysql = mysql_connect($hostname,$un,$pwd);
	mysql_select_db('tangyisheng',$mysql);

	$check_dup = "SELECT * FROM users WHERE username = '$uname'";
	mysql_query("set names utf8");
	$check_res = mysql_query($check_dup);
	$num_row = mysql_num_rows($check_res);
	$count = $q1+$q2+$q3+$q4+$q5+$q6+$q7+$q8;
	if($count > 0){
		echo '3';
	} else{
		if($num_row > 0){
			echo "2";
		}else{
       			mysql_query("set names utf8");
                        $sql = "INSERT INTO users (username,password,phone,question1,question2,question3,question4,question5,question6,question7,question8,status) VALUES('$uname','$password','$phone','$question1','$question2','$question3','$question4','$question5','$question6','$question7','$question8','$count')";
                        mysql_query($sql) or die(mysql_error());
                        mysql_query("set names utf8");
                        $get_currentId = "SELECT * FROM users WHERE username='$uname'";
                        $get_userid = mysql_query($get_currentId);
                        while($row=mysql_fetch_assoc($get_userid)){
                            $_SESSION['id'] = $row['id'];
                            $uid = $row['id'];
                            $prework = "INSERT INTO DataCollection(userId)VALUES('$uid')";
                            mysql_query($prework);
                        }
 			echo "1";
		}
	}
	
	// Do Not Modify Below

		//adding to database
			//$sql = "INSERT into `feedback`(`datepicker`,`type`,`website`,`fname`,`country`,`city`,`phone`,`email`,`offers`,`SMS`,`newsletter`,`date`) VALUES ('$datepicker','$type','$website','$fname','$country','$city','$phone','$email','$offers','$SMS','$newsletter', NOW());";
 		//$query = mysql_query($sql) or die(mysql_error());


		//send the email to Reciever
		// $to = $email;
		// $subject="Website Enquiry Demo - Super Cool Multi Step Contact/Registration Form";
		// $from = $email;
		// $ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
		
		// $body = "A user  $fname submitted Enquiry as follows\n".
		// "Enquiry Details\n".
		// "Requested Callback Date: $datepicker\n".
		// "Enquiry Type: $type\n".
		// "Client Website: $website\n".
		// "\n".
		// "Personal Details\n".
		// "Full Name: $fname\n".
		// "Country: $country\n".
		// "City: $city\n".
		// "Phone: $phone\n".
		// "Email: $email\n".
		// "\n".
		// "Notification Details\n".
		// "Subscribed for Offers: $offers\n".
		// "Subscribed for Offers: $SMS\n ".
		// "Subscribed for Newsletters: $newsletter\n ".
		// "\n".
		// "Sent From IP: $ip\n";	
		
		// $headers = "From: $email \r\n";
		// $headers .= "Reply-To: $email \r\n";
		
		// mail($to, $subject, $body,$headers);

	
		// submitted 
	}
	else
	{
		echo '0'; // invalid code
	}
	?>
