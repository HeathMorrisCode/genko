<?

class Display
{

    public $db;

    public function __construct(PDO $pdo)
    {
        $this->db = $pdo;
    }

    public function displayAllClients()
    {
        try
        {
            $statement = $this->db->query("SELECT * FROM tbl_clients");
            while ($row = $statement->fetch(PDO::FETCH_ASSOC))
            {
                ?>
                <tr>
                    <td><?php echo $this->displayClientName($row); ?></td>
                    <td><?php echo $this->displayRate($row); ?></td>                        
                    <td><?php echo $this->displayPunchButton($row); ?></td>
                    <td><?php echo $this->displayFlatButton($row); ?></td>
                </tr>
                <?
            }
        }
        catch(Exception $e)
        {
            echo $e->getMessage();
            die();
        }
    }

    public function displayRate(Array $client_row)
    {
        try
        {
            return "$ " . $client_row["client_rate"]  . "/h";
        }
        catch(Exception $e){
            echo $e->getMessage();
            die();
        }   
    }

    public function displayPunchButton(Array $client_row)
    {
        try
        {
            if ($this->db->query("SELECT * FROM tbl_punches WHERE `client_id` = {$client_row['client_id']} AND `punch_out` <=> NULL ORDER BY `punch_in` DESC LIMIT 1")->fetch(PDO::FETCH_ASSOC))
            {
                return "<a href=\"punch.php?client_id={$client_row["client_id"]}&type=out\" class=\"btn btn-danger btn-sm\">Punch Out</a>";
            }
            else
            {
                return "<a href=\"punch.php?client_id={$client_row["client_id"]}&type=in\" class=\"btn btn-success btn-sm\">Punch In</a>";
            }
        }
        catch(Exception $e){
            echo $e->getMessage();
            die();
        }   
    }

    public function displayFlatButton(Array $client_row)
    {
        try
        {
            if ($this->db->query("SELECT * FROM tbl_clients WHERE `client_id` = {$client_row['client_id']} AND `client_flats_allowed` = 1 LIMIT 1")->fetch(PDO::FETCH_ASSOC))
            {
                return "<a href=\"punch.php?client_id={$client_row["client_id"]}\" class=\"btn btn-info btn-sm\">Add Flat</a>";
            }
            else
            {
                // echo "<a href='#'>Nope</a>";
            }
        }
        catch(Exception $e){
            echo $e->getMessage();
            die();
        }   
    }

    public function displayClientName(Array $client_row)
    {
        try
        {
            return "<a href='/edit.php?client_id={$client_row["client_id"]}'>{$client_row["client_name"]}</a>";
        }
        catch(Exception $e){
            echo $e->getMessage();
            die();
        }   
    }


}