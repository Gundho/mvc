<?php  
/**
 * 
 */
class Berita_model
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
		$kategori = $date['kategori'];

		$query = "insert into berita values(DEFAULT,'$judul','$deskripsi','$author','$tgl','$kategori')";
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
		$kategori = $date['kategori'];

		$query = "update berita set judul='$judul', deskripsi='$deskripsi', author='$author', tanggal='$tgl',kategori_id='$kategori' where id='$id'";
  			
		$this->mysqli->query($query);
	}

	public function deleteBerita($id)
	{	
		$query = "DELETE FROM " . $this->table . " WHERE id=" . $id;
		$this->mysqli->query($query);
	}
}
?>