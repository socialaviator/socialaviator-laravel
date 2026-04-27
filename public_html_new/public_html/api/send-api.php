<?php
// Database connection
$host = 'localhost';
$db_name = 'u362868130_adminpanel';
$username = 'u362868130_admindb';
$password = 'Social@Admini$2024';

try {
    $conn = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if the request method is POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get the JSON data from the request
        $data = json_decode(file_get_contents("php://input"));

        // Validate data
        if (isset($data->name) && isset($data->contact_no) && isset($data->age) && isset($data->gender)) {
            $name = $data->name;
            $contact_no = $data->contact_no;
            $age = $data->age;
            $gender = $data->gender;

            // Prepare the SQL statement
            $stmt = $conn->prepare("INSERT INTO test (name, contact_no, age, gender, deleted) VALUES (:name, :contact_no, :age, :gender, 'N')");
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':contact_no', $contact_no);
            $stmt->bindParam(':age', $age);
            $stmt->bindParam(':gender', $gender);

            // Execute the statement
            if ($stmt->execute()) {
                echo json_encode(["message" => "User added successfully."]);
            } else {
                echo json_encode(["message" => "Error inserting user."]);
            }
        } else {
            echo json_encode(["message" => "Invalid input."]);
        }
    } else {
        echo json_encode(["message" => "Only POST requests are allowed."]);
    }
} catch (PDOException $e) {
    echo json_encode(["message" => "Connection failed: " . $e->getMessage()]);
}
?>
