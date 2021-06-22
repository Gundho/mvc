<?php  
/**
 * 
 */
require_once 'Kategori_class.php';
class Berita_class
{
	private $table = 'berita';
	private $db;
	private $mysqli;

	public function __construct()
	{
		$this->db = Database::getInstance();
		$this->mysqli = $this->db->getConnection(); 
	}

	public function getBerita()
	{	
		$query = "SELECT * FROM " . $this->table . " ORDER BY tanggal DESC";
		$result = $this->mysqli->query($query);
		$data = array();

		while( $row = $result->fetch_assoc()){
		    $data[] = $row;
		}

		return $data;
	}

	public function addBerita($data)
	{	
		$judul = $data['judul'];
		$author = $data['author'];
		$deskripsi = $data['deskripsi'];
		$tgl = date('Y-m-d');
		$kategori = $data['kategori'];
		$kategori_class = new Kategori_class();
		$nama_Kategori['data'] = $kategori_class->getKategori();
		$kategori_id;

		$kategori_exist = false;
		foreach ($nama_Kategori['data'] as $nama) {
		  if ($nama["nama_kategori"]==$kategori) {
		    $kategori_exist = true;
		  }
		}

		if ($kategori_exist == true) {			
			foreach ($nama_Kategori['data'] as $nama) {
			  if ($nama["nama_kategori"]==$kategori) {
			    $kategori_id = $nama["id"];
			    var_dump($kategori_id);
			  }
			}
			$query = "insert into berita values(DEFAULT,'$judul','$deskripsi','$author','$tgl','$kategori_id')";
		}else {
			$kategori_class->addKategori($kategori);
			$kategori_baru['data'] = $kategori_class->getKategori();
			$kategori_id;
			foreach ($kategori_baru['data'] as $nama) {
			  if ($nama["nama_kategori"]==$kategori) {
			    $kategori_id = $nama["id"];
			    var_dump($kategori_id);
			  }
			}
			$query = "insert into berita values(DEFAULT,'$judul','$deskripsi','$author','$tgl','$kategori_id')";
		}
		
		mysqli_query($this->mysqli, $query);
	}

	public function readBerita($id)
	{	
		$query = "SELECT * FROM " . $this->table . " ORDER BY tanggal DESC";
		$result = $this->mysqli->query($query);
		$data = array();

		while( $row = $result->fetch_assoc()){
		    $data[] = $row;
		}

		$dataBerita = array();
		foreach ($data as $berita) {
		  if ($berita['id']==$id) {
		    $dataBerita = $berita;
		  }
		}

		return $dataBerita;
	}

	public function editBerita($id, $data)
	{	
		$judul = $data['judul'];
		$author = $data['author'];
		$deskripsi = $data['deskripsi'];
		$tgl = date('Y-m-d');
		$kategori = $data['kategori'];
		$kategori_class = new Kategori_class();
		$nama_Kategori['data'] = $kategori_class->getKategori();
		$kategori_id;

		$kategori_exist = false;
		foreach ($nama_Kategori['data'] as $nama) {
		  if ($nama["nama_kategori"]==$kategori) {
		    $kategori_exist = true;
		  }
		}

		if ($kategori_exist == true) {			
			foreach ($nama_Kategori['data'] as $nama) {
			  if ($nama["nama_kategori"]==$kategori) {
			    $kategori_id = $nama["id"];
			    var_dump($kategori_id);
			  }
			}
			$query = "update berita set judul='$judul', deskripsi='$deskripsi', author='$author', tanggal='$tgl',kategori_id='$kategori_id' where id='$id'";
		}else {
			$kategori_class->addKategori($kategori);
			$kategori_baru['data'] = $kategori_class->getKategori();
			$kategori_id;
			foreach ($kategori_baru['data'] as $nama) {
			  if ($nama["nama_kategori"]==$kategori) {
			    $kategori_id = $nama["id"];
			    var_dump($kategori_id);
			  }
			}
			$query = "update berita set judul='$judul', deskripsi='$deskripsi', author='$author', tanggal='$tgl',kategori_id='$kategori_id' where id='$id'";
		}
  			
		$this->mysqli->query($query);
	}

	public function deleteBerita($id)
	{	
		$query = "DELETE FROM " . $this->table . " WHERE id=" . $id;
		$this->mysqli->query($query);
	}
}
?>