<?php

/**
 * FlyWithRocket.php
 *
 * Implements a behaviour
 * @author Indika Piyasena <indika@webmolecule.co.za>
 * @version 1.0
 */

require_once 'IFlyBehaviour.php';

class FlyWithRocket implements IFlyBehaviour
{

	function fly()
	{
		Print "Flying with a rocket\n";
	}
}

?>