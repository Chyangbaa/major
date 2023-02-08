<?php
session_start();
if(!isset($_SESSION['username'])){
    echo "you are logged out !";
    header('location:login.php');
}
?>
<?php

include '../config.php';
include './greeting.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>Home - CPM</title>
</head>
<body>
    <div class="home_content">
        <div class="heading">
            <h3>Home</h3>
            <div class="logout"><a href="./logout.php">Logout</a>
            </div>
        </div>

        <div class="body">
            <div class="date"><?php echo $date;?></div>
            <h1><?php echo $greeting ; echo $_SESSION['username'];?></h1>
            
        </div>
        <div class="col">
				<div class="card card1">
					<h3>Projects</h3> <br>
					<button id="openFormBtn"><i class="fa-solid fa-plus"></i>Create Project</button>
				</div>
				<div class="card card2">
					<h3>Your Group</h3>
					<p></p>
					<a href="airdetails.php"></a>
                    <button style="cursor:pointer;"id="openFormBtn">Create group</button>
				</div>
                <div class="card card3">
					<h3>Your Group</h3>
					<p></p>
					<a href="airdetails.php"></a>
                    <button style="cursor:pointer;"id="openFormBtn">Create group</button>
				</div>
                <div class="card card4">
					<h3>Your Group</h3>
					<p></p>
					<a href="airdetails.php"></a>
                    <button style="cursor:pointer;"id="openFormBtn">Create group</button>
				</div>
				
				
			</div>
            <form id="myForm" class="form">
            <!-- Your form fields here -->
            <h3>Poject details</h3>
            <input type="text" placeholder="Project name" required>
            <input type="number" placeholder="no. of members" required>
            <input type ="email" placeholder= "email of memebter" required>
            <button type="submit">Submit</button>
            <button type="button" id="closeFormBtn">Close</button>
</form>
    </div>
    <script src="../js/home.js"></script>
</body>
</html>