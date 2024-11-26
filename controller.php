<?php
    session_start();
    include("includes/sqlconnection.php");

    if(isset($_POST['save_record'])){

        $studname = $_POST['txtname'];
        $aboutme = $_POST['txtaboutme'];
        $age = $_POST['txtage'];
        $birthday = $_POST['txtbirthday'];
        $skills = $_POST['txtskills'];
        $school = $_POST['txtschool'];
        $course = $_POST['txtcourse'];
        $email = $_POST['txtemail'];
        $mobnumber = $_POST['txtnumber'];
        $pic = $_FILES['txtpic']['name'];

        $sql = "INSERT INTO portfolioinfo(studname, aboutme, age, birthday, skills, school, course, email, mobnumber, pic) VALUES ('$studname','$aboutme','$age','$birthday','$skills','$school','$course','$email','$mobnumber','$pic')";

        if($conn->query($sql)===TRUE){
            move_uploaded_file($_FILES["txtpic"]["tmp_name"],"uploads/".$_FILES['txtpic']['name']);
            $_SESSION['status'] = "Record Insert Successfully";
            header('location:admin.php');
        }

        else{
            $_SESSION['status'] = "Error: Insert failed...";
            header('location:admin.php');
        }

        $conn->close();

    }

    if(isset($_POST['update_record'])){

        $id = $_POST['txtid'];
        $studname = $_POST['txtname'];
        $aboutme = $_POST['txtaboutme'];
        $age = $_POST['txtage'];
        $birthday = $_POST['txtbirthday'];
        $skills = $_POST['txtskills'];
        $school = $_POST['txtschool'];
        $course = $_POST['txtcourse'];
        $email = $_POST['txtemail'];
        $mobnumber = $_POST['txtnumber'];
        $pic_new = $_FILES['txtpic']['name'];
        $pic_old = $_POST['txtpic_old'];

        if($pic_new != '') { // Check if a new file is uploaded
            $update_pic = $pic_new;
            move_uploaded_file($_FILES["txtpic"]["tmp_name"],"uploads/".$_FILES['txtpic']['name']);
        } 
        
        else {
            $update_pic = $pic_old; // Keep the old image file name
        }

        $sql = "UPDATE portfolioinfo SET studname ='$studname', aboutme ='$aboutme', age ='$age', birthday ='$birthday', skills ='$skills', school ='$school', course ='$course', email ='$email', mobnumber ='$mobnumber', pic ='$update_pic' WHERE id ='$id'";

        if($conn->query($sql) === TRUE) {
            $_SESSION['status'] ="Record Update Successfully";
            header('location:admin.php');
        }

        else{
            $_SESSION['status'] ="Error: Update Failed......";
            header('location:edit.php');
        }

        $conn->close();

    }

    // Function to fetch studname from the database
    function fetchStudname() {
        global $conn;

        $query = "SELECT studname FROM portfolioinfo";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row['studname'];
        }
        
        else {
            return "John Doe";
        }
    }

    // Function to fetch aboutme from the database
    function fetchAboutme() {
        global $conn;

        $query = "SELECT aboutme FROM portfolioinfo";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row['aboutme'];
        }
        
        else {
            echo "No Info Retrieved";
        }
    }

    // Function to fetch age from the database
    function fetchAge() {
        global $conn;

        $query = "SELECT age FROM portfolioinfo";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row['age'];
        }
        
        else {
            echo "No Info Retrieved";
        }
    }

    // Function to fetch birthday from the database
    function fetchBirthday() {
        global $conn;

        $query = "SELECT birthday FROM portfolioinfo";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row['birthday'];
        }
        
        else {
            echo "No Info Retrieved";
        }
    }

    // Function to fetch skills from the database
    function fetchSkills() {
        global $conn;

        $query = "SELECT skills FROM portfolioinfo";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row['skills'];
        }
        
        else {
            echo "No Info Retrieved";
        }
    }

    // Function to fetch school from the database
    function fetchSchool() {
        global $conn;

        $query = "SELECT school FROM portfolioinfo";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row['school'];
        }
        
        else {
            echo "No Info Retrieved";
        }
    }

    // Function to fetch course from the database
    function fetchCourse() {
        global $conn;

        $query = "SELECT course FROM portfolioinfo";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row['course'];
        }
        
        else {
            echo "No Info Retrieved";
        }
    }

    // Function to fetch email from the database
    function fetchEmail() {
        global $conn;

        $query = "SELECT email FROM portfolioinfo";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row['email'];
        }
        
        else {
            echo "No Info Retrieved";
        }
    }

    // Function to fetch mobnumber from the database
    function fetchMobnumber() {
        global $conn;

        $query = "SELECT mobnumber FROM portfolioinfo";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row['mobnumber'];
        }
        
        else {
            echo "No Info Retrieved";
        }
    }

    // Function to fetch pic from the database
    function fetchPic() {
        global $conn;

        $query = "SELECT pic FROM portfolioinfo";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row['pic'];
        }
        
        else {
            echo "No Info Retrieved";
        }
    }

    

?>


