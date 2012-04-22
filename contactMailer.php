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

$mailer = new mailer();

class mailer {

	private $name = "";
	private $email = "";
	private $subject = "";
	private $message = "";
	private $sendEmailTo = "";

	function __construct()
	{

		$this->name = $_POST['name'];
		$this->email = $_POST['email'];
		$this->subject = $_POST['subject'];
		$this->message = $_POST['message'];


		try {
			$this->_isFieldEmpty($this->name);
			$this->_isFieldEmpty($this->email);
			$this->_isFieldEmpty($this->subject);
			$this->_isFieldEmpty($this->message);
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
	
	private function _sendEmail() {
		$headers = 'From: '. $this->email ."\r\n" .
		    'Reply-To: '. $this->email . "\r\n" .
		    'X-Mailer: PHP/' . phpversion();

		mail($this->sendEmailTo, $this->subject, $this->message, $headers);
		
		echo $this->name . ", message was sent "
	}

}
?>