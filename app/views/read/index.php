<!-- Page Header -->
<header class="masthead" style="background-image: url('<?= BASEURL ?>/img/black.jpg')">
  <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1><?= $data['berita']['judul'] ?></h1>
            <span class="meta">Posted by
              <a href="#"><?= $data['berita']['author'] ?></a>
              on <?= $data['berita']['tanggal'] ?>
            </span>
          </div>
        </div>
      </div>
    </div>
</header>

<!-- Post Content -->
<article>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <p class="post-meta">Posted by
          <a href="#"><?= $data['berita']['author'] ?></a>
          on <?= $data['berita']['tanggal'] ?>
          <br>
          <a href="#"><?php echo $data['berita']['nama_kategori'] ?></a>
        </p>
        <h2 class="section-heading"><?= $data['berita']['judul'] ?></h2>
        <p><?= nl2br($data['berita']['deskripsi']) ?></p>
        <p>
          <button class="btn-primary" style="float:left; margin-right:10px;"><a href="<?= BASEURL ?>/berita/editForm/<?= $data['berita']['id'] ?>">Edit</a></button>
          <button class="btn-danger"><a href="<?= BASEURL ?>/berita/delete/<?= $data['berita']['id'] ?>" onclick="return confirm('Apa anda yakin?');">Delete</a></button>
        </p>
      </div>
    </div>
  </div>
</article>