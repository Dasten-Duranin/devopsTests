<?php


use PHPUnit\Framework\TestCase;

/**
 * @covers Valid
 */

 /** 
 * phpunit --bootstrap models/Valid.php tests/ValidTest.php
 */
final class ValidTest extends TestCase
{

    public function testEmailIsOk()
    {
        $this->assertEquals(
            TRUE,
            Valid::checkEmail('user@example.com')
        );
    }

    public function testEmailIsNok()
    {
        $this->assertEquals(
            FALSE,
            Valid::checkEmail('userexample.com')
        );
    }

    public function testPasswordLenghtOk()
    {
        $this->assertEquals(
            TRUE,
            Valid::checkPasswordLenght('azertyui')
        );
    }

    public function testPasswordLenghtNok()
    {
        $this->assertEquals(
            FALSE,
            Valid::checkPasswordLenght('azer')
        );
    }

    public function testPasswordUppercaseOk()
    {
        $this->assertEquals(
            TRUE,
            Valid::checkPasswordHaveUppercase('azErtyui')
        );
    }

    public function testPasswordUppercaseNok()
    {
        $this->assertEquals(
            FALSE,
            Valid::checkPasswordHaveUppercase('azer')
        );
    }
}