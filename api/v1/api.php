<?php

require_once 'API.class.php';

include "../../common/conn.php";
$GLOBALS['conn'] = $conn;

class MyAPI extends API
{
    protected $User;
    protected $res;
    protected $glob;

    public function __construct($request, $origin) {
        global $GLOBALS;
        $this->glob =& $GLOBALS;

        parent::__construct($request);

        $this->res = array('name' => 'Thiago');
    }

     protected function listing() {
        if ($this->method == 'GET') {
            $tmpUser = explode("/", $_REQUEST['request'])[1];
            $sql = "SELECT a.id, a.description, DATE_FORMAT(a.dat, '%m/%d/%Y') AS dat, a.val, a.hour, a.comment, b.user, b.name FROM expenses a INNER JOIN users b ON a.user_id = b.id WHERE b.user = '".$tmpUser."'";
            $res = mysql_query($sql, $this->glob['conn']);
            while( $row = mysql_fetch_assoc($res)) $arr[$row['id']] = $row; 

            return $arr;

        } else {
            return json_encode("Only accepts GET requests");
        }
     }

     protected function example() {
        if ($this->method == 'GET') {
            return $this->res;
        } else {
            return json_encode("Only accepts GET requests");
        }
     }
 }



// Requests from the same server don't have a HTTP_ORIGIN header
if (!array_key_exists('HTTP_ORIGIN', $_SERVER)) {
    $_SERVER['HTTP_ORIGIN'] = $_SERVER['SERVER_NAME'];
}

try {
    $API = new MyAPI($_REQUEST['request'], $_SERVER['HTTP_ORIGIN']);
    echo $API->processAPI();
} catch (Exception $e) {
    echo Array('error' => $e->getMessage());
}

//print_r($_REQUEST);