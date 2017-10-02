<?php
class DB {
	private $host;
	private $name;
	private $user;
	private $password;
	private $link;

	function __construct( $host, $name, $user, $password ) {
		$this->host = $host;
		$this->name = $name;
		$this->user = $user;
		$this->password = $password;

		$this->connect();
	}

	private function connect() {
		$this->link = mysqli_connect(
			$this->host,
			$this->user,
			$this->password,
			$this->name
		);
	}

	public function query( $query ) {
		return mysqli_query( $this->link, $query );
	}

	public function get_results( $query ) {
		$result = $this->query( $query );

		$rows = array();

	    if ( mysqli_num_rows( $result ) ) {
	      while ( $row = mysqli_fetch_assoc( $result ) ) {
	        $rows[] = $row;
	      }
	    }

	    return $rows;
	}
}
