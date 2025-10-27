<?php 

    include "config/config.php";

    $query = mysqli_query($con, "SELECT * FROM tbl_posts ORDER BY date desc");
    
?>

<div class="container my-5">
    <div class="row">

        <?php foreach($query as $data): ?>
        <?php 
            $judul_dipotong = substr($data['judul'], 0, 70) . (strlen($data['judul']) > 70 ? '...' : '');
            $artikel_dipotong = substr($data['artikel'], 0, 150) . (strlen($data['artikel']) > 150 ? '...' : '');
        ?>
        
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card shadow-sm h-100 border-0">
                <img src="assets/file/post/<?= $data['img'] ?>" alt="Gambar Berita <?= $data['judul'] ?>" class="card-img-top post-thumb">
                
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-primary fw-bold" style="min-height: 60px;">
                        <?= $judul_dipotong ?>
                    </h5>
                    
                    <p class="card-subtitle text-muted mb-3 small">
                        <i class="ion-calendar"></i>&nbsp; <?= date('d M Y', strtotime($data['date'])) ?> &nbsp; &middot; &nbsp;
                        <i class="ion-person"></i>&nbsp; <?= $data['author'] ?>
                    </p>
                    
                    <p class="card-text article-excerpt flex-grow-1">
                        <?= $artikel_dipotong ?>
                    </p>
                    
                    <a href="home.php?page=detail&id=<?= $data['id_post'] ?>" class="btn btn-outline-primary mt-3 align-self-start">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>

    </div>
    
    <div class="d-flex justify-content-center mt-5">
        <nav aria-label="Halaman Berita">
          <ul class="pagination shadow-sm">
            <li class="page-item disabled"><a class="page-link" href="#">&laquo;</a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
          </ul>
        </nav>
    </div>
</div>