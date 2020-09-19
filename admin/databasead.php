<?php 
	class connect {
		private $host = "localhost";
		private $db_name = "casio";
		private $db_user = "root";
		private $db_pass = "";
		private $conn = "";





    /**
     * @return mixed
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @param mixed $host
     *
     * @return self
     */
    public function setHost($host)
    {
        $this->host = $host;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDbName()
    {
        return $this->db_name;
    }

    /**
     * @param mixed $db_name
     *
     * @return self
     */
    public function setDbName($db_name)
    {
        $this->db_name = $db_name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDbUser()
    {
        return $this->db_user;
    }

    /**
     * @param mixed $db_user
     *
     * @return self
     */
    public function setDbUser($db_user)
    {
        $this->db_user = $db_user;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDbPass()
    {
        return $this->db_pass;
    }

    /**
     * @param mixed $db_pass
     *
     * @return self
     */
    public function setDbPass($db_pass)
    {
        $this->db_pass = $db_pass;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getConn()
    {
        return $this->conn;
    }

    /**
     * @param mixed $conn
     *
     * @return self
     */
    public function setConn($conn)
    {
        $this->conn = $conn;

        return $this;
    }
    public function __construct(){
    	
    	 $this->conn = new PDO("mysql:host=localhost;dbname=casio", $this->getDbUser(), $this->getDbPass());
		  if(!$this->conn) 
    	 	echo 'Ket noi database bi loi.';
    }
    public function getdb($table,$condition) {
    	  $sql = "select * from $table where gioitinhsp = $condition";
		  $stmt= $this->conn->prepare($sql);
		  $stmt->execute();
		  return $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function insert($masp,$tensp,$gioitinhsp,$hinhanhsp,$giasp,$motasp) {
    	  $sql = "INSERT INTO dongho VALUES ('".$masp."','".$tensp."','".$gioitinhsp."','".$hinhanhsp."','".$giasp."','".$motasp."')";
		  $stmt= $this->conn->prepare($sql);
		  $stmt->execute();
		  return 1;
    }
    public function delete($masp){
    	$sql = "delete from dongho where masp = $masp";
		  $stmt= $this->conn->prepare($sql);
		  $stmt->execute();
		  return 1;
    }



}

 ?>