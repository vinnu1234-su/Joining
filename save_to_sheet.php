<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];
    $date = $_POST['date'];

    // Use absolute path for the file
    $file = "C:/xampp/htdocs/student_form/students_data.csv";

    // Open the file in append mode
    $handle = fopen($file, 'a');

    // Check if file was successfully opened
    if ($handle === false) {
        die("Error: Unable to open the file '$file'. Please check file permissions or path.");
    }

    // Add the data to the CSV file
    $data = [$name, $email, $phone, $course, $date];
    fputcsv($handle, $data);

    // Close the file
    fclose($handle);

    echo "Data saved successfully!";
} else {
    echo "Invalid request method.";
}
?>
