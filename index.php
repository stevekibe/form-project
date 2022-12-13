<?php
require 'connection.php';
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $mobile_no = $_POST['mobile_no'];
    $id_no = $_POST['id_no'];
    $d_o_b = $_POST['d_o_b'];
    $post_secondary = $_POST['post_secondary'];
    $gpa = $_POST['gpa'];
    $date_addmited = $_POST['date_addmited'];
    $date_completion = $_POST['date_completion'];
    $secondary_school = $_POST['secondary_school'];
    $grade = $_POST['grade'];
    $date_registerd = $_POST['date_registerd'];
    $date_of_completion = $_POST['date_of_completion'];
    $skills = $_POST['skill'];
    $referee_name = $_POST['referee_name'];
    $referee_role = $_POST['referee_role'];
    $institution = $_POST['institution'];
    $contact_number = $_POST['contact_number'];
    
    //image and file validation assinging unique id
    $id_copy = $_FILES['id_copy']['name'];
    $attachment_letter = $_FILES['attachment_letter']['name'];
    $passport_photo = $_FILES['passport_photo']['name'];
    $application_letter = $_FILES['application_letter']['name'];
    $insurance = $_FILES['insurance']['name'];

    $temp_name =$_FILES["id_copy"]["tmp_name"];
    $temp_name1 =$_FILES["attachment_letter"]["tmp_name"];
    $temp_name2 =$_FILES["passport_photo"]["tmp_name"];
    $temp_name3 =$_FILES["application_letter"]["tmp_name"];
    $temp_name4 =$_FILES["insurance"]["name"];

    $imageExtension = explode('.',$id_copy);
    $imageExtension1 = explode('.',$attachment_letter);
    $imageExtension2 = explode('.',$passport_photo);
    $imageExtension3 = explode('.',$application_letter);
    $imageExtension4 = explode('.',$insurance);

    $imageExtension = strtolower(end($imageExtension));
    $imageExtension1 = strtolower(end($imageExtension1));
    $imageExtension2 = strtolower(end($imageExtension2));
    $imageExtension3 = strtolower(end($imageExtension3));
    $imageExtension4 = strtolower(end($imageExtension4));

    $newImageName = uniqid();
    $newImageName1 = uniqid();
    $newImageName2 = uniqid();
    $newImageName3 = uniqid();
    $newImageName4 = uniqid();

    $newImageName .= '.' . $imageExtension;
    $newImageName1 .= '.' . $imageExtension1;
    $newImageName2 .= '.' . $imageExtension2;
    $newImageName3 .= '.' . $imageExtension3;
    $newImageName4 .= '.' . $imageExtension4;

    move_uploaded_file($temp_name, "images/" . $newImageName);
    move_uploaded_file($temp_name1, "images/" . $newImageName1);
    move_uploaded_file($temp_name2, "images/" . $newImageName2);
    move_uploaded_file($temp_name3, "images/" . $newImageName3);
    move_uploaded_file($temp_name4, "images/" . $newImageName4);

   //sql query to insert to database
    $sql = "insert into information values('','$fname','$lname','$email',' $mobile_no',' $id_no','$d_o_b','$post_secondary',' $gpa','$date_addmited','$date_completion','$secondary_school','$grade',
    '$date_registerd','$date_of_completion','$skills','$referee_name','$referee_role','$institution','$contact_number',
    '$newImageName','$newImageName1','$newImageName2','$newImageName3','$newImageName4')";
    
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('uploded succesfully')</script>";
    } else {

        echo "<script>alert('was not succful try again)</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <title>Personal information</title>
    
</head>

<body>
    <div class="container">

        <!-- start of form -->
        <form method="post" enctype="multipart/form-data">
            <!--personal information-->
            <h4>Personal Information:</h4>
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGrid" placeholder="First name" name="fname">
                        <label for="floatingInputGrid"> First name:</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGrid" placeholder="Last name" name="lname">
                        <label for="floatingInputGrid">Last Name:</label>
                    </div>
                </div>
            </div>
            <br>
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" name="email">
                        <label for="floatingInputGrid"> Email Address: </label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGrid" placeholder="mobile number" name="mobile_no">
                        <label for="floatingInputGrid">Mobile Number:</label>
                    </div>
                </div>
            </div>
            <br>
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating">
                        <input type="number" class="form-control" id="floatingInputGrid" placeholder="Id Number" name="id_no">
                        <label for="floatingInputGrid"> ID number:</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating">

                        <input class="form-control" type="text" id="dob" placeholder="Date of Birth" name="d_o_b">
                        <label for="dob"> Date of Birth:</label>
                    </div>
                </div>

            </div>
            <hr class="solid">
            <!--Academic Qulifications -->
            <h4>Academic Qualifications:</h4>
            <div class="bottom">

                <p><b>2. Institution 2(Post - Secondary)</b></p>
                <div class="row g-2">
                    <div class="col">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInputGrid" placeholder="school name" name="post_secondary">
                            <label for="floatingInputGrid">Name of College/University:</label>
                        </div>
                    </div>
                    
                    <div class="col">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInputGrid" placeholder="gpa" name="gpa">
                            <label for="floatingInputGrid">GPA:</label>

                        </div>
                    </div>
                </div>
                <br>
                <div class="row g-2">
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="from1" placeholder="from" name="date_addmited">
                            <label for="from1">Date Addmited:</label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating">

                            <input class="form-control" type="text" id="to1" placeholder="to" name="date_completion">
                            <label for="to1">Date of completion/Expected date of completion</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="top">
                <p><b>1. Institution 1(Secondary School)</b></p>
                <div class="row g-2">
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInputGrid" placeholder="school name" name="secondary_school">
                            <label for="floatingInputGrid">Name of Secondary School:</label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInputGrid" placeholder="grade" name="grade">
                            <label for="floatingInputGrid">Grade Attained:</label>

                        </div>
                    </div>
                </div>
                <br>
                <div class="row g-2">
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="from" placeholder="from" name="date_registerd">
                            <label for="from">Date Addmited</label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating">

                            <input class="form-control" type="text" id="to" placeholder="to" name="date_of_completion">
                            <label for="to">Date of completion </label>
                        </div>
                    </div>
                </div>
            </div>
            



            <hr class="solid">

            <!--skills -->
            <h4>Skills:</h4>
            <textarea name="skills"></textarea>
            <hr class="solid">

            <!--refree -->
            <H4>Referee:</H4>
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGrid" placeholder="referee name" name="referee_name">
                        <label for="floatingInputGrid">Name of Referee:</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGrid" placeholder="referee role" name="referee_role">
                        <label for="floatingInputGrid">Referee Role:</label>

                    </div>
                </div>
            </div>
            <br>
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGrid" placeholder="workplace" name="institution">
                        <label for="floatingInputGrid">Institution:</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGrid" placeholder="contact number" name="contact_number">
                        <label for="floatingInputGrid">Contact Number:</label>

                    </div>
                </div>
            </div>

            <hr class="solid">

            <!--document attachments-->
            <div class="row g-2">
                <div class="col-md">
                    <p><B>ID Copy:</B></p>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="id_copy" onchange="idValidation()" name="id_copy">

                    </div>
                </div>
                <div class="col-md">
                    <p><b>Industrial Letter from Institution:</b></p>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="attachment_letter" name="attachment_letter" onchange="attValidation()">

                    </div>
                </div>
            </div>

            <div class="row g-2">
                <div class="col-md">
                    <p><B>Passport Photo: </B></p>

                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="passport_photo" name="passport_photo" onchange="passValidation()">

                    </div>
                </div>
                <div class="col-md">
                    <p><b>Application Letter:</b></p>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="application_letter" name="application_letter" onchange="appValidation()">

                    </div>
                </div>
            </div>
            <p><b>Insurance Cover: </b>At Least 6 months Insurance Cover(Original Copy, stamped and signed)
            </p>
            <div class="input-group mb-3">
                <input type="file" class="form-control" id="insurance" name="insurance" onchange="insValidation()">

            </div>

            <p style="text-align: center ;">
            <button type = "submit" name = "submit">Submit</button>
            </p>

        </form>
        <!-- end of form -->
    </div>


    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/o1oemd6cb2rygz57idmcdoxis2qfekl0qpiga37eoqf65kgx/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <script>
        //wyswyg textarea
        tinymce.init({
            selector: 'textarea',

            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck | align lineheight | checklist numlist bullist indent outdent ',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [{
                    value: 'First.Name',
                    title: 'First Name'
                },
                {
                    value: 'Email',
                    title: 'Email'
                },
            ]
        });
    </script>
    <script>
        //date of birth validation
        $(function() {
            $("#dob").datepicker({
                changeMonth: true,
                changeYear: true,
                yearRange: "1980:2040",
                maxDate: "-18y",
                minDate: "-25y",
            });
        });
    </script>
    <script>
        ///file validation functions.
        idValidation = () => {
            const fi = document.getElementById('id_copy');
            // Check if any file is selected.
            if (fi.files.length > 0) {
                for (const i = 0; i <= fi.files.length - 1; i++) {
                    var fext = fi.value.split('.').pop().toLowerCase();
                    const fsize = fi.files.item(i).size;
                    const file = Math.round((fsize / 1024));
                    // The size of the file.
                    if (file >= 4096) {
                        alert(
                            "File too Big, please select a file less than 4mb");
                        document.getElementById('id_copy').value = "";
                    } else {
                        //check format

                        if ((fext !== "png") && (fext !== "jpeg") && (fext !== "jpg") && (fext !== "pdf")) {
                            alert("Unaccepted file format. Please attach a .jpeg, .png, .jpg or .pdf format.");
                            document.getElementById('id_copy').value = "";
                        }
                    }
                }
            }
        }
        attValidation = () => {
            const fi = document.getElementById('attachment_letter');
            // Check if any file is selected.
            if (fi.files.length > 0) {
                for (const i = 0; i <= fi.files.length - 1; i++) {
                    var fext = fi.value.split('.').pop().toLowerCase();
                    const fsize = fi.files.item(i).size;
                    const file = Math.round((fsize / 1024));
                    // The size of the file.
                    if (file >= 4096) {
                        alert(
                            "File too Big, please select a file less than 4mb");
                        document.getElementById('attachment_letter').value = "";
                    } else {
                        //check format

                        if ((fext !== "png") && (fext !== "jpeg") && (fext !== "jpg") && (fext !== "pdf")) {
                            alert("Unaccepted file format. Please attach a .jpeg, .png, .jpg or .pdf format.");
                            document.getElementById('attachment_letter').value = "";
                        }
                    }
                }
            }
        }
        passValidation = () => {
            const fi = document.getElementById('passport_photo');
            // Check if any file is selected.
            if (fi.files.length > 0) {
                for (const i = 0; i <= fi.files.length - 1; i++) {
                    var fext = fi.value.split('.').pop().toLowerCase();
                    const fsize = fi.files.item(i).size;
                    const file = Math.round((fsize / 1024));
                    // The size of the file.
                    if (file >= 4096) {
                        alert(
                            "File too Big, please select a file less than 4mb");
                        document.getElementById('passport_photo').value = "";
                    } else {
                        //check format

                        if ((fext !== "png") && (fext !== "jpeg") && (fext !== "jpg") && (fext !== "pdf")) {
                            alert("Unaccepted file format. Please attach a .jpeg, .png, .jpg or .pdf format.");
                            document.getElementById('passport_photo').value = "";
                        }
                    }
                }
            }
        }
        appValidation = () => {
            const fi = document.getElementById('application_letter');
            // Check if any file is selected.
            if (fi.files.length > 0) {
                for (const i = 0; i <= fi.files.length - 1; i++) {
                    var fext = fi.value.split('.').pop().toLowerCase();
                    const fsize = fi.files.item(i).size;
                    const file = Math.round((fsize / 1024));
                    // The size of the file.
                    if (file >= 4096) {
                        alert(
                            "File too Big, please select a file less than 4mb");
                        document.getElementById('application_letter').value = "";
                    } else {
                        //check format

                        if ((fext !== "png") && (fext !== "jpeg") && (fext !== "jpg") && (fext !== "pdf")) {
                            alert("Unaccepted file format. Please attach a .jpeg, .png, .jpg or .pdf format.");
                            document.getElementById('application_letter').value = "";
                        }
                    }
                }
            }
        }
        insValidation = () => {
            const fi = document.getElementById('insurance');
            // Check if any file is selected.
            if (fi.files.length > 0) {
                for (const i = 0; i <= fi.files.length - 1; i++) {
                    var fext = fi.value.split('.').pop().toLowerCase();
                    const fsize = fi.files.item(i).size;
                    const file = Math.round((fsize / 1024));
                    // The size of the file.
                    if (file >= 4096) {
                        alert(
                            "File too Big, please select a file less than 4mb");
                        document.getElementById('insurance').value = "";
                    } else {
                        //check format

                        if ((fext !== "png") && (fext !== "jpeg") && (fext !== "jpg") && (fext !== "pdf")) {
                            alert("Unaccepted file format. Please attach a .jpeg, .png, .jpg or .pdf format.");
                            document.getElementById('insurance').value = "";
                        }
                    }
                }
            }
        }
    </script>
    <script>
        ///date validation function
        $(function() {
            var dateFormat = "mm/dd/yy",
                from = $("#from")
                .datepicker({
                    changeYear: true,
                    changeMonth: true,
                    maxDate: "-14Y",
                })
                .on("change", function() {
                    to.datepicker("option", "minDate", getDate(this));
                }),
                to = $("#to").datepicker({
                    changeYear: true,
                    changeMonth: true,
                    maxDate: "-3y",
                })
                .on("change", function() {
                    from.datepicker("option", "maxDate", getDate(this));
                });

            function getDate(element) {
                var date;
                try {
                    date = $.datepicker.parseDate(dateFormat, element.value);
                } catch (error) {
                    date = null;
                }

                return date;
            }
        });
    </script>
    <script>
        $(function() {
            var dateFormat = "mm/dd/yy",
                from = $("#from1")
                .datepicker({
                    changeYear: true,
                    changeMonth: true,
                    maxDate: "-6Y",
                })
                .on("change", function() {
                    to.datepicker("option", "minDate", getDate(this));
                }),
                to = $("#to1").datepicker({
                    changeYear: true,
                    changeMonth: true,
                    maxDate: "-1d",
                })
                .on("change", function() {
                    from.datepicker("option", "maxDate", getDate(this));
                });

            function getDate(element) {
                var date;
                try {
                    date = $.datepicker.parseDate(dateFormat, element.value);
                } catch (error) {
                    date = null;
                }

                return date;
            }
        });
    </script>

</body>

</html>