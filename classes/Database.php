<?

class Database
{

	public function connect(){
		try{
			$db = new PDO('mysql:host=localhost;dbname=genko;charset=utf8mb4', 'beep', 'beep');
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
			return $db;
		}
		catch(Exception $e){
			echo $e->getMessage();
			die();
		}

	}

	public function collectClientInfo(PDO $db, $client_id){
		try{
			$statement = $db->query("SELECT * FROM tbl_clients WHERE `client_id` = $client_id");
			
			return $statement->fetch(PDO::FETCH_ASSOC);

		}
		catch(Exception $e){
			echo $e->getMessage();
			die();
		}
		
	}









}



