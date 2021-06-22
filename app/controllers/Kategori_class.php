<?php  
/**
 * 
 */
class Kategori_class
{
	private $table = 'kategori';
	private $db;
	private $mysqli;

	public function __construct()
	{
		$this->db = Database::getInstance();
		$this->mysqli = $this->db->getConnection(); 
	}

	public function getKategori()
	{	
		$query = "SELECT * FROM " . $this->table;
		$result = $this->mysqli->query($query);
		$data = array();

		while( $row = $result->fetch_assoc()){
		    $data[] = $row;
		}

		return $data;
	}

	public function addKategori($data)
	{	
		$nama_kategori = $data;

		$query = "insert into kategori values(DEFAULT,'$nama_kategori')";
		mysqli_query($this->mysqli, $query);
	}

	public function readKategori($id)
	{	
		$query = "SELECT * FROM " . $this->table;
		$result = $this->mysqli->query($query);
		$data = array();

		while( $row = $result->fetch_assoc()){
		    $data[] = $row;
		}

		$dataKategori = array();
		foreach ($data as $kategori) {
		  if ($kategori['id']==$id) {
		    $dataKategori = $kategori;
		  }
		}

		return $dataKategori;
	}

	public function editKategori($id, $data)
	{	
		$nama_kategori = $data['kategori'];

		$query = "update kategori set nama_kategori='$nama_kategori' where id='$id'";
  			
		$this->mysqli->query($query);
	}

	public function deleteKaategori($id)
	{	
		$query = "DELETE FROM " . $this->table . " WHERE id=" . $id;
		$this->mysqli->query($query);
	}
}
?>