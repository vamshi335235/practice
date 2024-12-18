<?php
include_once 'connection.php';

$sql = "SELECT * FROM register";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr><th>ID</th><th>Name</th><th>Email</th><th>Actions</th></tr>";
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . htmlspecialchars($row["id"]) . "</td>
                <td>" . htmlspecialchars($row["name"]) . "</td>
                <td>" . htmlspecialchars($row["email"]) . "</td>
                <td>
                    <div class='dropdown'>
                      
                        <div class='dropdown-content'>
                            <a href='edit.php?id=" . $row["id"] . "'>Edit</a>  <!-- Edit link -->
                            <a href='delete.php?id=" . $row["id"] . "' onclick='return confirmDelete();'>Delete</a>
                        </div>
                    </div>
                </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No records found.";
}

$conn->close();
?>

<script>
function confirmDelete() {
    return confirm("Are you sure you want to delete this record?");
}
</script>

