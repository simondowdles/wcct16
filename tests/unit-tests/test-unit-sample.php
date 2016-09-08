<?php
namespace WCCT;
 
use phpmock\phpunit\PHPMock;
 
class UnitTests extends \PHPUnit_Framework_TestCase{
    use PHPMock;

	/**
	 * A single example test.
	 */
	function test_sample() {
		// Replace this with some actual testing code.
		$this->assertTrue( true );
	}

	public function test_wcct_get_option(){
	    $get_option = $this->getFunctiosMock('WCCT', 'get_option');
        $get_option->expects($this->once())
            ->with($this->equalTo('wcct_venue'))
            ->willReturn('river-club');
	    $this->assertEquals('river-club', wcct_get_option(
	        'venue'
        ));
    }
}