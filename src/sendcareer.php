<?php

//require_once 'connect.php';
if (isset($_POST['submit'])) {

    $target_dir = "uploads/joinusatkoshish/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $fileType = pathinfo($target_file, PATHINFO_EXTENSION);

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "<script>alert('Sorry, Target file already exists, Try renaming the file');</script>";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 2097152) {
        echo "<script>alert('Sorry, your file is too large. Maximum allowed size is 2 mb');</script>";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($fileType != "pdf" && $fileType != "doc" && $fileType != "docx") {
        echo "<script>alert('Sorry, Your file was not uploaded. only Pdf, doc, docx files are allowed. Please RETRY !!');</script>";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        // echo "Sorry, your file was not uploaded.";
        // echo "<script>alert('Sorry,there was an error uploading your file.');</script>";
        echo "<script>document.location.href='joinus.php'</script>";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            // rename the file after moving
            $myname = strstr($target_file, ' ', true) . "-Application-of-" . date("Y-m-d-H-i-s") . "." . $fileType;
            rename($target_file, $myname);
            $uploadOk = 1;
        } else {
            echo "<script>alert('Sorry,there was an error uploading your file.');</script>";
            echo "<script>document.location.href='joinus.php'</script>";
        }
    }
}

if ($uploadOk == 1) {
    //echo "<script>alert('File is ok.');</script>";
} else {
    echo "<script>alert('Sorry,there was an error uploading your file.');</script>";
    echo "<script>document.location.href='joinus.php'</script>";
}

$resume_link = "https://koshish.000webhostapp.com/" . $myname;

// process form
if (empty($_POST['name']) ||
    empty($_POST['gender']) ||
    empty($_POST['dob']) ||
    empty($_POST['email']) ||
    empty($_POST['contact']) ||
    empty($_POST['address']) ||
    empty($_POST['qualification']) ||
    empty($_POST['city']) ||
    empty($_POST['district']) ||
    empty($_POST['state']) ||
    empty($_POST['pincode']) ||
    !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    echo "No arguments Provided!";
    return false;
}

// do database work

$name = strip_tags(htmlspecialchars($_POST['name']));
$gender = strip_tags(htmlspecialchars($_POST['gender']));
$dob = strip_tags(htmlspecialchars($_POST['dob']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['contact']));
$address = strip_tags(htmlspecialchars($_POST['address']));
$city = strip_tags(htmlspecialchars($_POST['city']));
$district = strip_tags(htmlspecialchars($_POST['district']));
$state = strip_tags(htmlspecialchars($_POST['state']));
$pincode = strip_tags(htmlspecialchars($_POST['pincode']));
$qualification = strip_tags(htmlspecialchars($_POST['qualification']));

require_once 'Qconnect.php';

if (isset($_POST["name"]) &&
    isset($_POST["gender"]) &&
    isset($_POST["email"]) &&
    isset($_POST["contact"]) &&
    isset($_POST["city"]) &&
    isset($_POST["district"]) &&
    isset($_POST["state"]) &&
    isset($_POST["pincode"]) &&
    isset($_POST["qualification"])) {

    $stmt = $conn->prepare("INSERT INTO `koshish`.`teachers` (`name`, `gender`, `dob`, `email`, `contact`, `address`, `city`, `district`, `state`, `pincode`, `qualificarion`) VALUES (?,?,?,?,?,?,?,?,?,?,?);
");
    $stmt->bind_param("sssssssssis", $name, $gender, $dob, $email_address, $phone, $address, $city, $district, $state, $pincode, $qualification);
    if ($stmt->execute() == true) {
// success
        ?>
        <script language="javascript">
            alert("Submission Successful");
            // window.location.href = 'index.php';
            // gotta do more work as well.
        </script>
        <?php

    } else {
//failure
        ?>
        <script language="javascript">
            alert("Error !! Please Try Again later.");
            window.location.href = 'joinus.php';
        </script>
        <?php

    }
    $stmt->close();
    $conn->close();
} else {
// failure
    ?>
    <script language="javascript">
        alert("Error !! Please Try Again later.");
        window.location.href = 'joinus.php';
    </script>
    <?php

}

// Create the email and send the message
$to = 'koshish.odgh@gmail.com'; // Add your email address This is where the form will send a message to.

$email_subject = "Job Application: From $name ";
$email_body = "You have received a JOB Application on your website koshish.com's career form.\n\n" . "Here are the details:\n\n
Name  : $name\n
Gender: $gender\n
DOB   : $dob\n
Email : $email_address\n
Phone : $phone\n
Address : $address , $district , $state , $pincode \n
Qualification: $qualification\n
Resume link  :\n$resume_link\n\n";

$headers = "From: careers@koshish.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";
$issent = mail($to, $email_subject, $email_body, $headers);

//return true;
if ($issent) {
    ?>
    <script language="javascript">
        alert("Application Successfully Received. We will contact you shortly.")
        window.location.href = 'index.php';
    </script>
    <?php

} else {
    ?>
    <script language="javascript">
        //alert("last level")
        alert("Error !! Please Try Again later.")
        window.location.href = 'index.php';
    </script>
    <?php

}
