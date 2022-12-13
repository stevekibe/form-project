$id_copy = $_FILES['image']['name'];
    $attachment_letter = $_FILES['image']['name'];
    $passport_photo = $_FILES['image']['name'];
    $application_letter = $_FILES['image']['name'];
    $insurance = $_FILES['image']['name'];

   
    move_uploaded_file($_FILES['image']['tmp_name'], "images/$id_copy");
    move_uploaded_file($_FILES['image']['tmp_name'], "images/$attachment_letter");
    move_uploaded_file($_FILES['image']['tmp_name'], "images/$passport_photo");
    move_uploaded_file($_FILES['image']['tmp_name'], "images/$application_letter");
    move_uploaded_file($_FILES['image']['tmp_name'], "images/$insurance");