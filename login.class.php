<?php 
class LoginUser{
	// class properties
	private $username;
	private $password;
	public $error;
	public $success;
	private $storage = "./db/users.json";
	private $stored_users;
	private $email;

	// class methods
	public function __construct($username, $email,$password){
		$this->username = $username;
		$this->email = $email;
		$this->password = $password;
		$this->stored_users = json_decode(file_get_contents($this->storage), true);
		$this->login();
	}


	private function login(){
		foreach ($this->stored_users as $user) {
			if($user['username'] == $this->username && $user['email'] == $this->email){
				if(password_verify($this->password, $user['password'])){
					session_start();
					$_SESSION['user'] = $this->username;
					$_SESSION['mail'] = $this->email;
					$_SESSION['password'] = $user['password'];
					header("location: account.php"); exit();
				}
			}
		}
		return $this->error = "Wrong username or password: <a href='register.php'>Register?</a>";
	}

}