<?php

require_once 'db.php';


class Contact
{
    public $id;
    public $name;
    public $lastname;
    public $phone;

    public function __toString()
    {
        return $this->id." ". $this->name." ". $this->lastname." ". $this->phone;
    }
}

class CRUD
{

    private $db;

    function __construct($db)
    {
        $this->db=$db;
    }

    function __destruct()
    {
        mysqli_close($this->db);
    }

    public function create(Contact $contact)
    {

        $query = "insert into contact (id, name, last_name, phone) values (?, ?, ?, ?)";

        $in = mysqli_prepare($this->db, $query);

        mysqli_stmt_bind_param($in, "sssi", $contact->id, $contact->name, $contact->lastname, $contact->phone);

        mysqli_stmt_execute($in);

        if(mysqli_stmt_affected_rows($in)>0)
            echo "บันทึกสำเร็จ";
        else echo mysqli_error($this->db);

    }

      public function read($query)
    {
        $res = @mysqli_query($this->db, $query);
        return $res;
    }

    public function update($query)
    {
        if(mysqli_query($this->db, $query))
            echo "Updated";
        else echo mysqli_error($this->db);
    }

    public function delete($query)
    {
       if(mysqli_query($this->db, $query))
            echo "Removed";
        else echo mysqli_error($this->db);
    }


}



?>
