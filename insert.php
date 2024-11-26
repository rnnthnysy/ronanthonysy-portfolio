<!DOCTYPE html>
<html>

    <head>
        <title>Add New Information</title>
    </head>

    <body>
        <center>
            <h1>Add Information</h1> 

            <form action="controller.php" method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <th>Name</th>
                    <td><input type="text" name="txtname"></td>
                </tr>

                <tr>
                    <th>About Me</th>
                    <td><input type="text" name="txtaboutme"></td>
                </tr>

                <tr>
                    <th>Age</th>
                    <td><input type="text" name="txtage"></td>
                </tr>

                <tr>
                    <th>Birthday</th>
                    <td><input type="text" name="txtbirthday"></td>
                </tr>

                <tr>
                    <th>Skills</th>
                    <td><input type="text" name="txtskills"></td>
                </tr>

                <tr>
                    <th>School</th>
                    <td><input type="text" name="txtschool"></td>
                </tr>

                <tr>
                    <th>Course</th>
                    <td><input type="text" name="txtcourse"></td>
                </tr>

                <tr>
                    <th>Email</th>
                    <td><input type="text" name="txtemail"></td>
                </tr>

                <tr>
                    <th>Number</th>
                    <td><input type="text" name="txtnumber"></td>
                </tr>

                <tr>
                    <th>Image</th>
                    <td><input type="file" name="txtpic"></td>
                </tr>

            </table>
                <button type="submit" name="save_record">Save Record</button>
            </form>
            
        </center>
    </body>

</html>