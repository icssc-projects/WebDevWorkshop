<?php
/**
* Contact Mailer
*
* An example of how a accepting POST data from a form and emailing
* the contents to an email address.
*
* Web Workshop - Spring 2012
*
* @author		Adam Brenner <aebrenne@uci.edu>
* @link			http://student-council.ics.uci.edu/
**/

class mailer {

	private $name = "";
	private $email = "";
	private $subject = "";
	private $message = "";
	private $sendEmailTo = "adam12la@gmail.com";
	private $status = FALSE;

	function __construct($name, $email, $subject, $message)
	{

		$this->name = $name;
		$this->email = $email;
		$this->subject = $subject;
		$this->message = $message;
		
		try {			
			$this->_isFieldEmpty($this->name);
			$this->_isFieldEmpty($this->email);
			$this->_isFieldEmpty($this->subject);
			$this->_isFieldEmpty($this->message);
			if(!$this->_isValidEmail($this->email))
				throw new Exception("Invalid email address");
			$this->_sendEmail();
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
	
	private function _isFieldEmpty($field) {
		if( empty($field) || !isset($field)) {
			throw new Exception("One or more fields were left empty. Please go back and fill in all fields");
		}
	}
	
	private function _isValidEmail($email) {
		return preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $email);
	}
	
	private function _sendEmail() {
		$headers  = 'MIME-Version: 1.0' . "\r\n";
//		$headers .= 'Content-type: text; charset=iso-8859-1' . "\r\n";
		$headers .= "Content-type: text/plain; charset=iso-8859-1" . "\r\n"; 
		$headers .= 'From: '.$this->name.' <'.$this->email.'>' . "\r\n";
		$headers .= 'X-Mailer: php';

		mail($this->sendEmailTo, $this->subject, $this->message, $headers);
		
		$this->status = TRUE;
	}
	
	public function sendOK() {
		return $this->status;
	}

}
?>