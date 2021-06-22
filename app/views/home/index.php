<!-- Page Header -->
<header class="masthead" style="background-image: url('<?= BASEURL ?>/img/black.jpg')">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-10 mx-auto">
				<div class="site-heading">
					<h1>MyBlog</h1>
					<span class="subheading">Disini Tempat Kita Bercerita Banyak Hal</span>
				</div>
			</div>
		</div>
	</div>
</header>

<!-- Main Content -->
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-10 mx-auto">
			<?php foreach ($data['berita'] as $data) : ?>
				<div class="post-preview">
					<a href="<?= BASEURL ?>/berita/<?= $data['id'];?>">
						<h2 class="post-title">
							<?= $data['judul']; ?>
						</h2>
						<h3 class="post-subtitle">
							<?= substr($data['deskripsi'],0,45)."..."; ?>
						</h3>
					</a>
					<p class="post-meta">Posted by
						<a href="#"><?php echo $data['author'] ?></a>
						on <?= $data['tanggal']; ?>
						<br>
						<a href="#"><?php echo $data['kategori_id'] ?></a>
					</p>
				</div>
				<hr>
			<?php endforeach; ?>

			<!-- Pager -->
			<div class="clearfix">
				<center>
					<a class="btn" style="background-color:#00FF40;" href="<?= BASEURL ?>/tambah">Tambahkan Data &rarr;</a>
				</center>
			</div>
		</div>
	</div>
</div>