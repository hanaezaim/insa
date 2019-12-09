<?php
/**
 * Gestion de poneys
 */
class Poneys
{
    private $count = 8;

    /**
     * Retourne le nombre de poneys
     *
     * @return void
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * Retire un poney du champ
     *
     * @param int $number Nombre de poneys à retirer
     *
     * @return void
     */
 /*   public function removePoneyFromField(int $number): void
    {
        $this->count -= $number;
    }*/

    public function removePoneyFromField(int $number): void 
    {
	if($number>=8){
		throw new Exception('quantité négative!!');
	} else {
		$this->count -= $number;
	} 
    }

    public function AddPoneyFromField(int $number): void
    {
	$this->count += $number;
    }
    /**
     * Retourne les noms des poneys
     *
     * @return array
     */
    public function getNames(): array
    {

    }
    public function PlaceDispo() : bool
    {
	if($this->count <=15) {
		echo "j'ai ",$this->count,"places dipso";
		return True;
	}else {
	      return FALSE;
	}
    }
}
?>
