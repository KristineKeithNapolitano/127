<?php
		$Username = $_POST['Username'];
		$Email = $_POST['Email'];
		$Password = $_POST['Password'];
		$choice = $_POST['choice'];
		$add = $_POST['add'];
		$cn = $_POST['cn'];
		$sched = $_POST['sched'];
		$skills = $_POST['skills'];

		$conn = new mysqli('localhost' , 'root' , '', 'test');

		if ($conn->connect_error){
			die('Connection Failed : '.$conn->connect_error);
		}
		else{
			if($choice == "Employee"){
					$sql = "insert into worker(worker_name, worker_email, worker_pass, worker_address, worker_num, worker_sched, worker_skills) 
					values('$Username', '$Email', '$Password', '$add', '$cn', '$sched', '$skills')";
					$res = mysqli_query($conn, $sql);
				
			}
			else{
				$sql = "insert into customer(customer_name, customer_email, customer_pass, customer_address, customer_num) 
					values('$Username', '$Email', '$Password', '$add', '$cn')";
				$res = mysqli_query($conn, $sql);
			}

			if ($res) {
				header('Location: index.html');
			}else {
				echo "nah!";
			}
		}
?>