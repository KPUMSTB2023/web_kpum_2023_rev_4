<?php 

function deleteCandidate($conn, $id) {
    $sqlDelete = "DELETE FROM kandidat WHERE id = ?";
    $stmtDelete = $conn->prepare($sqlDelete);
    $stmtDelete->bind_param("i", $id);
    $stmtDelete->execute();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["update_candidate"])) {
        $id = $_POST['id'];
        $nama_capresma = $_POST['nama_capresma'];
        $nama_cawapresma = $_POST['nama_cawapresma'];
    
        $sqlUpdate = "UPDATE kandidat SET nama_capresma = ?, nama_cawapresma = ? WHERE id = ?";
        $stmtUpdate = $conn->prepare($sqlUpdate);
        $stmtUpdate->bind_param("ssi", $nama_capresma, $nama_cawapresma, $id);
        $stmtUpdate->execute();
        
        header("Refresh:0");
        exit();
    } elseif (isset($_POST["delete_candidate"])) {
        $id = $_POST["id"];
        deleteCandidate($conn, $id);
        header("Refresh:0");
        exit();
    }
}
?>