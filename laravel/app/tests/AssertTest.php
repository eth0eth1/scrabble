<?php

class AssertTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testAssert()
	{
		// Basic simple demonstration of phpunit testing
		// This test has no value
		$theTruth = true;
		$theString = 'This is a long test string';
		//$this->assertFalse($theTruth);
		$this->assertContains('long',$theString);
	}

	public function testFalse()
	{
		$theTruth = true;
		$this->assertFalse($theTruth);
	}

	public function testArray()
	{
		$this->assertArrayHasKey('myKey', array('myKey' => 'myValue'));
	}

}
