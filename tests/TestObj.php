<?php

class TestObj{
	
	public function test1($event, $from, $rcpt, $mail){
		#fwrite(STDOUT, 'my function: '.$event->getTrigger()."\n");
		return 43;
	}
	
}
