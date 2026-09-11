<?php
include "koneksi.php";

$query_skills = mysqli_query($conn, "SELECT * FROM skills");

if (mysqli_num_rows($query_skills) > 0) {
    while ($row_skill = mysqli_fetch_assoc($query_skills)) {
        // Logika penyesuaian gambar icon
        $img_url = "https://cdn-icons-png.flaticon.com/512/1830/1830839.png"; // Default Cooking
        if ($row_skill['title'] == 'Baking') {
            $img_url = "https://cdn-icons-png.flaticon.com/512/2682/2682446.png";
        } else if ($row_skill['title'] == 'Food Plating') {
            $img_url = "https://cdn-icons-png.flaticon.com/512/2921/2921822.png";
        } else if ($row_skill['title'] == 'Exploration') {
            $img_url = "https://cdn-icons-png.flaticon.com/512/854/854878.png";
        }
?>
<div class="col-md-6 col-lg-3 mb-4">
    <div class="skill-card">
        <img src="<?php echo $img_url; ?>" alt="<?php echo htmlspecialchars($row_skill['title']); ?>" width="70" class="mb-3">
        <h4><?php echo htmlspecialchars($row_skill['title']); ?></h4>
        <p class="small text-muted mb-3"><?php echo htmlspecialchars($row_skill['description']); ?></p>
        <div class="d-flex justify-content-between mb-2">
            <small class="text-muted">Keahlian</small>
            <small class="font-weight-bold"><?php echo $row_skill['percentage']; ?>%</small>
        </div>
        <div class="progress">
            <div class="progress-bar" style="width: <?php echo $row_skill['percentage']; ?>%;"></div>
        </div>
    </div>
</div>
<?php 
    }
} else {
    echo '<p class="text-white text-center">Belum ada data kemampuan.</p>';
}

mysqli_close($conn);
?>