<?php
include_once 'connection.php';
$id=$_REQUEST['id'];
$sql = "DELETE FROM register WHERE id=$id";
$result = $conn->query($sql);
if ($result) {
    header("location: editdelete.php?msg=delete done");
}
$conn->close();
?>

<script>
function confirmDelete() {
    return confirm("Are you sure you want to delete this record?");
}
</script>
