<?php 
class User{
	const TABLE = 'users';
	const DBNAME = 'vk';

	public $db = false;
	public $result = false;

	public function __construct() {
		$this->db = new PDO('mysql:host=localhost;dbname=' . self::DBNAME . ';charset=utf8', 'vk', '12345');
		$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}

	public function registration($data) {
		$insert = $this->db->prepare('insert into ' . self::TABLE . ' (email, login, password) values (:email, :login, :password)');
		$insert->bindParam(':email', $data['email']);
		$insert->bindParam(':login', $data['login']);
		$insert->bindParam(':password', $data['password']);

		try{
			$insert->execute();
			$this->result = 'Hello ' . $data['login'];
		} catch(Exception $e) {
			$this->result = $e->getMessage();
		}
	}
}

function generate_options($from,$to,$callback=false)
      {
$reverse=false;
 if($from>$to)
      {

      $tmp=$from;
      $from=$to;
      $to=$tmp;
 $reverse=true;
      }
 $return_string=array();
      for($i=$from;$i<=$to;$i++)

      {
      $return_string[]='
  <option value="'.$i.'">'.($callback?$callback($i):$i).'</option>
      ';

      }
 if($reverse)
      {
      $return_string=array_reverse($return_string);
      }
 return join('',$return_string);

      }
function callback_month($month)
      {
      return date('M',mktime(0,0,0,$month,1));
      }
/* and here is how we use it (taken from our XHTML code above):
      generate_options(1,31);				// generate days
      generate_options(date('Y'),1900);			// generate years, in reverse
      generate_options(1,12,'callback_month');		// generate months
      */

?>