<?php

class Mock_Libraries_Email
{
	private $data = [];

	public function initialize()
	{
		
	}

	public function from($from)
	{
		$this->data['from'] = $from;
	}

	public function to($to)
	{
		$this->data['to'] = $to;
	}

	public function bcc($bcc)
	{
		$this->data['bcc'] = $bcc;
	}

	public function subject($subject)
	{
		$this->data['subject'] = $subject;
	}

	public function message($message)
	{
		$this->data['message'] = $message;
	}

	public function send()
	{
		return TRUE;
	}

	public function _get_data()
	{
		return $this->data;
	}
}