<?

class User
{
    public $db;

    public function __construct(PDO $pdo)
    {
        $this->db = $pdo;
    }

    public function logIn()
    {

    }

    public function logOut()
    {

    }

    public function register()
    {
		// filter_var('sgamgee@example.com', FILTER_VALIDATE_EMAIL); // Returns "sgamgee@example.com". This is a valid email address.
    }

    public function changeEmail()
    {
		// filter_var('sauron@mordor', FILTER_VALIDATE_EMAIL); // Returns boolean false! This is *not* a valid email address.

    }

    public function changePassword()
    {
    	
    }

    public function resetPassword()
    {
    	
    }

    public function delete()
    {
    	
    }

}