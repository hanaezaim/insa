<?php
use PHPUnit\Framework\TestCase;

require_once 'src/Poneys.php';

/**
 * Classe de test de gestion de poneys
 */
class PoneysTest extends TestCase
{
    /**
     * Undocumented function
     *
     * @return void
     */
  /*  public function testRemovePoneyFromField()
    {
        // Setup
        $Poneys = new Poneys();

        // Action
        $Poneys->removePoneyFromField(3);

        // Assert
        $this->assertEquals(5, $Poneys->getCount());
    }*/

	/**
	*@dataProvider provider
**/

	//méthode setup()
   protected function setUp()
   {
	$this->poneys = new Poneys();
   } 

    public function testRemovePoneyFromField($a,$b)
    {
        // Setup
        $Poneys = new Poneys();

        
	try{
		// Action
		$Poneys->removePoneyFromField($a);

		// Assert
        	$this->assertEquals($b, $Poneys->getCount());
		 
	} catch (Exception $e) {
		echo 'Exception reçue: ',$e->getMessage(), "\n";
	}
        
    }

    public function provider()
    {
	return array(
		array(3,5),
		array(0,8),
		array(2,6),
		//array(1,9)
	);
    }
    public function testAddPoneyFromField()
    {
	// Setup
     //   $Poneys = new Poneys();

        // Action
       	$this->poneys->AddPoneyFromField(3);

        // Assert
    	$this->assertEquals(11, $this->poneys->getCount());
	
    }

    public function testgetNames()
    {
	$names = [
		"Hanae","Khaoula","Hind","Houda"
	];	
	$this->poneys = $this->getMockBuilder('Poneys')->getMock();
	$this->poneys
	     ->expects($this->exactly(1))
	     ->method('getNames')
	     ->willReturn($names);


	$this->assertEquals(
		$names,
		$this->poneys->getNames()
	);
    }

    public function testPlaceDispo()
    {
	$Poneys = new Poneys();
	$this->assertTrue(true,$Poneys->PlaceDispo());
    }

   
}
?>
