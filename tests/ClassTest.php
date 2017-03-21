<?php

    require_once "src/Allergies.php";

    class AllergiesTest extends PHPUnit_Framework_TestCase
    {

        function testEggs()
        {
            $test_Eggs = new Allergies;
            $input = 1;

            $result=$test_Eggs->addAllergies($input);

            $this->assertEquals("eggs", $result);
        }

      }



?>
