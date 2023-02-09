<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="project-creating-form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
    <a href="javascript:history.back()">
  <i class="fa-solid fa-xmark"></i>
</a>
    <div class="container">
        <header>Create project</header>

        <form action="">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Project details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Project title</label>
                            <input type="text" placeholder="Weather App" name="project_title" required>
                        </div>

                        <div class="input-field">
                            <label>Project details</label>
                            <input type="text" placeholder="Recording weather info in database..." name="project_details"required>
                        </div>

                        <div class="input-field">
                            <label>Project type</label>
                            <select id="project_type" name="project_type" required>
            <option value="" disabled selected>Select</option>
            <option value="ecommerce">E-commerce</option>
            <option value="software_development">Software Development</option>
            <option value="networking">Networking</option>
            <option value="ai">Artificial Intelligence</option>
            </select>
                        </div>

                        <div class="input-field">
                            <label> Supervisor</label>
                            <select name="team_members" id="team_members">
                            <option value="" disabled selected>Select your supervisor</option>
                            <option value="prabinshrestha">Prabin Shrestha</option>
                            <option value="prabinshrestha">Sumit Bidari</option>
                            <option value="prabinshrestha">Anup Bhuju</option>
                            <option value="prabinshrestha">Suraj Hekka</option>
                            </select>
                        </div>

                        
                    </div>
                </div>
                        <!-- second fields -->
                 <div class="details personal">
                    <span class="title">Team members</span>
                    <div class="fields">

                        <div class="input-field">
                            <label>Member 1</label>
                            <select name="team_members" id="team_members">
                            <option value="" disabled selected>Select from users</option>
                            <?php
                            // Connecting to the database and retrieve the list of available users
                            include './html/dbcon.php';
                            $result = mysqli_query($con, "SELECT * FROM users");
                            // Loop through the results and create an option for each user
                            while($row = mysqli_fetch_array($result)) {
                            echo "<option value='" . $row['user_id'] . "'>" . $row['username'] . "</option>";
                            }
                            ?>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Member 2</label>
                            <select name="team_members" id="team_members">
                            <option value="" disabled selected>Select from users</option>
                            <?php
                            // Connecting to the database and retrieve the list of available users
                            include './html/dbcon.php';
                            $result = mysqli_query($con, "SELECT * FROM users");
                            // Loop through the results and create an option for each user
                            while($row = mysqli_fetch_array($result)) {
                            echo "<option value='" . $row['user_id'] . "'>" . $row['username'] . "</option>";
                            }
                            ?>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Member 3</label>
                            <select name="team_members" id="team_members">
                            <option value="" disabled selected>Select from users</option>
                            <?php
                            // Connecting to the database and retrieve the list of available users
                            include './html/dbcon.php';
                            $result = mysqli_query($con, "SELECT * FROM users");
                            // Loop through the results and create an option for each user
                            while($row = mysqli_fetch_array($result)) {
                            echo "<option value='" . $row['user_id'] . "'>" . $row['username'] . "</option>";
                            }
                            ?>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Member 4</label>
                            <select name="team_members" id="team_members">
                            <option value="" disabled selected>Select from users</option>
                            <?php
                            // Connecting to the database and retrieve the list of available users
                            include './html/dbcon.php';
                            $result = mysqli_query($con, "SELECT * FROM users");
                            // Loop through the results and create an option for each user
                            while($row = mysqli_fetch_array($result)) {
                            echo "<option value='" . $row['user_id'] . "'>" . $row['username'] . "</option>";
                            }
                            ?>
                            </select>
                        </div>
                    </div>
                    <button class="btn">
                        <span class="btntext">Create</span>
                        <i class="fa-solid fa-plus"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>