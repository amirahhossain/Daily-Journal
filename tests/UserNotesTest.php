<?php

class UserNotesTest extends \PHPUnit\Framework\TestCase
{

	protected $user;

	public function setUp()
	{

		$this->user = new \App\Models\UserNotes;

		
	}


	public function testThatWeCandelete()
	{
		$this->user->delete('5');

		$this->assertEquals($this->user->getdelete(), '5');
	}

    public function testThatWeCansubmit()
	{
		$this->user->todo_submit('6');

		$this->assertEquals($this->user->gettodo_submit(), '6');
	}
}