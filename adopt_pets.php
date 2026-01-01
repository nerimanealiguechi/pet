<?php
include("../config/db.php");

$query = "SELECT * FROM animals WHERE status = 'Available'";
$result = mysqli_query($conn, $query);



if (!$result) {
    die("Erreur SQL: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Adopter un animal</title>
<link rel="stylesheet" href="../assets/css/style.css?v=2">

</head>
<body>


<h1> Animals for adoption </h1>

<div class="pets-container">

<?php while ($row = mysqli_fetch_assoc($result)) { ?>
    
    <div class="pet-card">
        
 
        <img src="../assets/images/<?= $row['image']; ?>" alt="<?= $row['name']; ?>">


        <div class="pet-info">
            <h3><?= $row['name']; ?></h3>

            <p><strong>Type:</strong> <?= $row['type']; ?></p>
            <p><strong>Age:</strong> <?= $row['age']; ?> ans</p>
            <p><strong>size:</strong> <?= $row['size']; ?></p>
            <p><strong>Location:</strong> <?= $row['location']; ?></p>
            <p><strong>health:</strong> <?= $row['health']; ?></p>
            <p><strong>friendly:</strong> <?= $row['friendly']; ?></p>
            <p><strong>Urgent:</strong> <?= $row['urgent']; ?></p>

            <a class="adopt-btn" href="../adopt/adopt.php?pet_id=<?= $row['id']; ?>">
                Adopter
            </a>
        </div>

    </div>

<?php } ?>

</div>

</body>
</html>
