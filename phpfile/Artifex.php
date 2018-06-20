<?php
/*
 * Developed by Spera Automation Systems and others contributers
 * https://artifex.Spera.Systems
 * Under GPL
 */
class Artifex {
    private $prvt_DBHOST;
    private $prvt_DBNAME;
    private $prvt_DBUSER;
    private $prvt_DBPASS;
    private $CONNECTION_SUCCESS;
    private $CONNECTION_STRING;
    private function __construct() {
        $this->prvt_DBHOST = "localhost"; // Put your database host here
        $this->prvt_DBNAME = "atlashotel"; // Put your database name here 
        $this->prvt_DBUSER = "root"; // Put your database username here
        $this->prvt_DBPASS = ""; // Put your database password here (You can obfuscate the file anyway) 
        $this->CONNECTION_SUCCESS = FALSE;
    }
    protected static $instance;
    public static function getInstance() {
        if(is_null(self::$instance)) {
            self::$instance = new self();
            self::$instance->connect();
        }
        return self::$instance;
    }
    public function connect() {
        $connection = mysqli_connect($this->prvt_DBHOST, $this->prvt_DBUSER, $this->prvt_DBPASS, $this->prvt_DBNAME);
        if(!mysqli_connect_errno()) {
            $this->CONNECTION_SUCCESS = TRUE;
            $this->CONNECTION_STRING = $connection;
            return $connection;
        }else {
            echo "Unable to connect";
            return FALSE;
        }
    }
    public function execute($SQL_STATEMENT) {
        if($this->CONNECTION_SUCCESS == TRUE) {
            $value = $this->CONNECTION_STRING->query($SQL_STATEMENT);
            return $value;
        }else {
            return FALSE;
        }
    }
    public function insert($table_name, $assoc_array) { // function to insert in database
	$sql_q = "INSERT INTO ".strtolower($table_name)." ("; // sql query begins (string processing)
	foreach($assoc_array as $key => $value) { // loop over keys and insert them into query string
            $sql_q .= "".$key."" . " ,";
	}
	$sql_q = rtrim($sql_q, ","); // remove last ',' from the string
	$sql_q .=" ) VALUES ( "; // end keys placement
	foreach($assoc_array as $key => $value) { // loop over values and insert them into query string
            $sql_q .= "'".$value."'" . " ,";
	}
	$sql_q = rtrim($sql_q, ","); // remove last ',' from the string
        $sql_q .= ")"; // finalize query string
	return $this->execute($sql_q); // call executer
    }
    public function edit($table_name, $skey_name, $skey_value, $assoc_array) { // update function
	$sql_q = "UPDATE ".strtolower($table_name)." SET "; // begin query
	foreach($assoc_array as $key => $value) { // loop over values and set them into the query string
            $sql_q .= $key . " = " . "'". $value . "',";
	}
	$sql_q = rtrim($sql_q, ","); // remove the last ','
	$sql_q .= " WHERE ".$skey_name." = '".$skey_value."'"; // add where condition based on key & value parameters
        echo $sql_q;
        return $this->execute($sql_q); // call executer
    }
    public function fetch_all($table_name) {
        $sql_q = "SELECT * FROM ".strtolower($table_name);
        $list = $this->execute($sql_q);
        return $list;
    }
    public function find_one($table_name, $key, $value) {
        $sql_q = "SELECT * FROM ".strtolower($table_name)." WHERE ".$key." = '".$value."'";
        $reply = $this->execute($sql_q);
        $replyable = $reply->fetch_assoc();
        return $replyable;
    }
    public function find_range($table_name, $key, $valueFrom, $valueTo) {
        $sql_q = "SELECT * FROM ".strtolower($table_name)." WHERE ".$key." >= '".$valueFrom."' AND ".$key." <= '".$valueTo."'";
        $reply = $this->execute($sql_q);
        return $reply;
    }
    public function Delete($table_name, $key, $value) {
        $sql_q = "DELETE FROM ".strtolower($table_name)." WHERE ".$key." = ".$value;
        echo $sql_q;
        return $this->execute($sql_q);
    }
    public function find($table_name, $key, $value) {
        $sql_q = "SELECT * FROM ".strtolower($table_name)." WHERE ".$key." = '".$value."'";
        $reply = $this->execute($sql_q);
        return $reply;
    }
    public function sum_where($table_name, $key, $value, $summable) {
        $sql_q = "SELECT SUM(`".$summable."`) as `sum` FROM `".strtolower($table_name)."` WHERE `".$key."` = '".$value."'";
        return $this->execute($sql_q)->fetch_assoc();
    }
    public function getLastError() { // return the last error message via this
        return mysqli_error($this->CONNECTION_STRING);
    }

    public function getLastId() { // returns the last Id inserted via this connection
        return $this->CONNECTION_STRING->insert_id;
    }
    public function find_limit_order_desc($table_name, $key, $value, $limit, $orderby) {
        $sql_q = "SELECT * FROM `" . strtolower($table_name) . "` WHERE `" . strtoupper($key) . "` = '" . $value . "' ORDER BY `" . strtoupper($orderby) . "` DESC LIMIT " . $limit . "";
        return $this->execute($sql_q);
    }

    public function find_limit_order_asc($table_name, $key, $value, $limit, $orderby) {
        $sql_q = "SELECT * FROM `" . strtolower($table_name) . "` WHERE `" . strtoupper($key) . "` = '" . $value . "' ORDER BY `" . strtoupper($orderby) . "` ASC LIMIT " . $limit . "";
        return $this->execute($sql_q);
    }

    public function find_limit_like_order_desc($table_name, $key, $value, $limit, $orderby) {
        $sql_q = "SELECT * FROM `" . strtolower($table_name) . "` WHERE `" . strtoupper($key) . "` = '" . $value . "' ORDER BY `" . strtoupper($orderby) . "` DESC LIMIT " . $limit . "";
        return $this->execute($sql_q);
    }
    public function find_limit_like_order_asc($table_name, $key, $value, $limit, $orderby) {
        $sql_q = "SELECT * FROM `" . strtolower($table_name) . "` WHERE `" . strtoupper($key) . "` = '" . $value . "' ORDER BY `" . strtoupper($orderby) . "` ASC LIMIT " . $limit . "";
        return $this->execute($sql_q);
    }
    public function find_like($table_name, $key, $value) {
        $sql_q = "SELECT * FROM `" . strtolower($table_name) . "` WHERE `" . strtoupper($key) . "` LIKE '%" . $value . "%'";
        return $this->execute($sql_q);
    }
    public function find_like_or($table_name, $key1, $value1, $key2, $value2) {
        $sql_q = "SELECT * FROM `" . strtolower($table_name) . "` WHERE `" . strtoupper($key1) . "` LIKE '%" . $value1 . "%' OR `" . strtoupper($key2) . "` LIKE '%" . $value2 . "%'";
        return $this->execute($sql_q);
    }
    public function count($table_name, $key, $value) {
        $sql_q = "SELECT COUNT(*) as `count` FROM ".strtolower($table_name)." WHERE ".$key." = ".$value;
        return $this->execute($sql_q)->fetch_assoc();
    }
    public function Delete_and($table_name, $key, $value, $key2, $value2) { // Added by @LobnaElbakry
        $sql_q = "DELETE FROM " . strtolower($table_name) . " WHERE " . $key . " = " . $value . " AND " . $key2 . " = '" . $value2."'";
        echo $sql_q;
        return $this->execute($sql_q);
    }
    public function Delete_or($table_name, $key, $value, $key2, $value2) { 
        $sql_q = "DELETE FROM " . strtolower($table_name) . " WHERE " . $key . " = " . $value . " OR " . $key2 . " = '" . $value2."'";
        echo $sql_q;
        return $this->execute($sql_q);
    }
    public function find_one_and($table_name, $key, $value, $key2, $value2) { // Added By @LobnaElbakry
        $sql_q = "SELECT * FROM " . strtolower($table_name) . " WHERE " . $key . " = " . $value . " AND " . $key2 . " = '" . $value2."'";
        $reply = $this->execute($sql_q);
        $replyable = $reply->fetch_assoc();
        return $replyable;
    }
    public function find_one_or($table_name, $key, $value, $key2, $value2) {
        $sql_q = "SELECT * FROM " . strtolower($table_name) . " WHERE " . $key . " = " . $value . " OR " . $key2 . " = '" . $value2."'";
        $reply = $this->execute($sql_q);
        $replyable = $reply->fetch_assoc();
        return $replyable;
    }
}
