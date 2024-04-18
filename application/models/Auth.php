<?php 
class Auth extends CI_Model 
{

	public function __construct()
	{
        parent::__construct();
	}

	function register($username,$password,$fullname,$email,$level)
	{
		$data_user = array(
			'username'=>$username,
			'password'=>password_hash($password,PASSWORD_DEFAULT),
			'fullname'=>$fullname,
            'email'=>$email,
            'level'=>$level
		);
		$this->db->insert('users',$data_user);
	}

	function login_user($username,$password)
	{
        $query = $this->db->get_where('users',array('username'=>$username));
        if($query->num_rows() > 0)
        {
            $data_user = $query->row();
            // if (password_verify($password, $data_user->password, $email, $level)) {
                if (password_verify($password, $data_user->password)) {
                $this->session->set_userdata('username',$username);
				// $this->session->set_userdata('fullname',$data_user->fullname);
                // $this->session->set_userdata('email',$data_user->email);
                // $this->session->set_userdata('level',$data_user->level);
				$this->session->set_userdata('is_login',TRUE);
                return TRUE;
            } else {
                return FALSE;
            }
        }
        else
        {
            return FALSE;
        }
	}
    
	
    function cek_login()
    {
        if(empty($this->session->userdata('is_login')))
        {
			redirect('login');
		}
    }
}
?>