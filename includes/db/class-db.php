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

	public function get_from( $table, $extra = '' ) {
		$query = "SELECT * FROM `$table`";

		if ( $extra ) {
			$query .= " $extra";
		}

		return $this->get_results( $query );
	}

	public function get_row( $table, $id ) {
		$results = $this->get_results( "SELECT * FROM `$table` WHERE ID = '$id'" );

		if ( ! empty( $results ) ) {
			return $results[0];
		}

		return null;
	}

	public function insert( $table, $data ) {
		// "INSERT INTO usuarios (`ID`, `username`, `name`, `email`, `password`) VALUES (NULL, 'pperez', 'Pedro Perez', 'pedro.perez@mail.com', '')"

		$columns = '';
		$values = '';

		foreach ( $data as $column => $value ) {
			$columns .= "`$column`,";
			$values .= "'$value',";
		}

		$columns = trim( $columns, ',' );
		$values  = trim( $values, ',' );

		$query = "INSERT INTO `$table` ($columns) VALUES ($values)";

		return $this->query( $query );
	}

	public function update( $table, $id, $data ) {
		// UPDATE `usuarios` SET `username` = 'ppperez' WHERE `usuarios`.`ID` = 3;

		$query = "UPDATE `$table` SET ";

		foreach ( $data as $column => $value ) {
			$query .= "`$column` = '$value',";
		}

		$query = trim( $query, ',' );
		$query .= " WHERE ID = '$id'";

		return $this->query( $query );
	}

	public function delete( $table, $id ) {
		// DELETE FROM `usuarios` WHERE ID = '4'

		return $this->query( "DELETE FROM `$table` WHERE ID = '$id'" );
	}
}
