<!DOCTYPE html>
<html>

    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Information</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #f4f4f4;
            padding-top: 50px;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background-color: #fdfdfd;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }
        .form-control {
            border-radius: 5px;
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

        label {
            font-weight: bold;
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }
    </style>
    </head>

    <body>
    <div class="container">
        <h1 class="text-center mb-4">Edit Information</h1>
        <form action="controller.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="txtpic_old" value="<?php echo $row['pic']; ?>">
            <table class="table">
                <?php
                getRecord($_GET['id']);
                ?>
            </table>
            <div class="text-center">
                <button type="submit" name="update_record" class="btn btn-primary">Update Information</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php
        function getRecord($recno){
            include("includes/sqlconnection.php");
            $sql = "SELECT * FROM portfolioinfo WHERE id='$recno'";
            $result = $conn->query($sql);

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()) {

                    echo "

                        <tr>
                            <input type='hidden' name='txtid' value ='".$row['id']."'>   
                            <th>Name</th>
                            <td><input type='text' name='txtname' value ='".$row['studname']."' </td>
                            <td rowspan='4'><img src='uploads/$row[pic]' width='100' height='75' alt='$row[pic]'></td>
                        </tr>
                    
                        <tr>
                            <th>About Me</th>
                            <td><input type='text' name='txtaboutme' value ='".$row['aboutme']."'></td>
                        </tr>

                        <tr>
                            <th>Age</th>
                            <td><input type='text' name='txtage' value ='".$row['age']."'></td>
                        </tr

                        <tr>
                            <th>Birthday</th>
                            <td><input type='text' name='txtbirthday' value ='".$row['birthday']."'></td>
                        </tr

                        <tr>
                            <th>Skills</th>
                            <td><input type='text' name='txtskills' value ='".$row['skills']."'></td>
                        </tr

                        <tr>
                            <th>School</th>
                            <td><input type='text' name='txtschool' value ='".$row['school']."'></td>
                        </tr

                        <tr>
                            <th>Course</th>
                            <td><input type='text' name='txtcourse' value ='".$row['course']."'></td>
                        </tr

                        <tr>
                            <th>Email</th>
                            <td><input type='text' name='txtemail' value ='".$row['email']."'></td>
                        </tr

                        <tr>
                            <th>Mobile Number</th>
                            <td><input type='text' name='txtnumber' value ='".$row['mobnumber']."'></td>
                        </tr

                        <tr>
                            <th>Picture</th>
                            <td><input type='file' name ='txtpic'  </td>
                            <input type='hidden' name='txtpic_old' value= '".$row['pic']."'>
                        </tr>";

                }
            }

            else{
                echo "no record found";
            }
            
            $conn->close();
        }
?>