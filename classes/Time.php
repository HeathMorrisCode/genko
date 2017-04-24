<?

class Time
{

    public $db;

    public function __construct(PDO $pdo)
    {
        $this->db = $pdo;
    }

    public function punchIn (int $client_id,string $punch_description)
    {

    }

    public function punchOut (int $client_id,string $punch_description)
    {

    }

    public function flat (int $client_id,string $punch_description)
    {

    }

}