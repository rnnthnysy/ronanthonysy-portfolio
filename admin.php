
<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fdfdfd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #444;
        }
        .profile {
            margin-bottom: 20px;
            padding: 20px;
            background-color: #f2f2f2;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        .profile img {
            display: block;
            margin: 0 auto;
            max-width: 100px;
            max-height: 75px;
            border-radius: 5px;
        }
        .profile p {
            margin: 10px 0;
            color: #666;
        }
        .button-container {
            text-align: center;
        }
        .button {
            background-color: #f0ad4e;
            border: none;
            color: white;
            padding: 15px 30px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            width: 200px;
            margin: 0 10px;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .button:hover {
            background-color: #eea236;
        }
        .edit-button {
            background-color: #5bc0de;
            border: none;
            color: white;
            padding: 15px 30px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            width: 200px;
            margin: 0 10px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .edit-button:hover {
            background-color: #46b8da;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Admin Panel</h1>
        <?php
            if(isset($_SESSION['status']) && $_SESSION != '') {
                echo "<p>{$_SESSION['status']}</p>";
                unset($_SESSION['status']);
            }            
        ?>
        <?php viewAll(); ?>
        <form action="index.php" method="POST">
            <button type="submit" class="button" name="view_profile">View Profile</button>
        </form>
    </div>
</body>
</html>

<?php
function viewAll() {
    include("includes/sqlconnection.php");
    $sql = "SELECT * FROM portfolioinfo ORDER BY id";
    $result = $conn->query($sql);
    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "
                <div class='profile'>
                    <img src='uploads/{$row['pic']}' alt='{$row['pic']}'>
                    <p><strong>ID:</strong> {$row['id']}</p>
                    <p><strong>Name:</strong> {$row['studname']}</p>
                    <p><strong>About Me:</strong> {$row['aboutme']}</p>
                    <p><strong>Age:</strong> {$row['age']}</p>
                    <p><strong>Birthday:</strong> {$row['birthday']}</p>
                    <p><strong>Skills:</strong> {$row['skills']}</p>
                    <p><strong>School:</strong> {$row['school']}</p>
                    <p><strong>Course:</strong> {$row['course']}</p>
                    <p><strong>Email:</strong> {$row['email']}</p>
                    <p><strong>Contact Number:</strong> {$row['mobnumber']}</p>
                    <a href='edit.php?id={$row['id']}' class='edit-button' style='text-decoration: none; color: white;'>Edit</a>
                    
                </div>
            ";
        }
    } else {
        echo "<p>No records found</p>";
    }
    $conn->close();
}
?>
