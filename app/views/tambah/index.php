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

<div class="container">
  <div class="card">
    <div class="card-header">
      <h3>Tambah Konten</h3>
    </div>
    <div class="card-body">
      <form method="POST" enctype="multipart/form-data" action="<?= BASEURL; ?>/berita/add">
        <div class="form-group">
          <label>Judul</label>
          <input name="judul" required="" value="" class="form-control">
        </div>
        <div class="form-group">
          <label>Kategori</label>
          <input name="kategori" required="" value="" class="form-control">
        </div>
        <div class="form-group">
          <label>Penulis</label>
          <input name="author" required="" value="" class="form-control">
        </div>
        <div class="form-group">
          <label>Deskripsi</label>
          <textarea class="form-control" name="deskripsi" rows="10" required="">
        </textarea>
        <br>
        <center>
          <input type="submit" value="Tambah" class="btn-success">
          <input type="button" class="btn-danger" value="Cancel" onclick="history.go(-1)"></input>
        </center>
      </form>
    </div>
  </div>
</div>