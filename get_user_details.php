<?php
// Check if the ID parameter is present
if (isset($_POST['id'])) {
    // Connect to the database
    $conn = mysqli_connect('localhost', 'root', '', 'u627005231_airbnb');

    // Prepare the SQL query to fetch the user details
    $query = "SELECT * FROM house WHERE id = ".$_POST['id'];

    // Execute the SQL query
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the user details
        $user = mysqli_fetch_assoc($result);

        // Return the user details in JSON format
        echo json_encode($user);
    } else {
        // Return an error message
        echo json_encode(['error' => 'Failed to fetch user details']);
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    // Return an error message if the ID parameter is missing
    echo json_encode(['error' => 'ID parameter is missing']);
}
?>
