
<?php
 
class User extends connection_db
{
    public $id_user;
    public $FullName;
    public $email;
    public $password;
    public $id_role;
    public $image_user;

    public function __construct( $id_role, $email, $password,$FullName)
    {
        $this->id_role = $id_role;
        $this->email = $email;
        $this->password = $password;
        $this->FullName = $FullName;
    }


}
