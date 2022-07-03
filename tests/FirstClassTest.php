<?php


namespace Tests;

use PHPUnit\Framework\TestCase;
use AungPhyoKywe\PhpPackageStructure\FirstClass;

class FirstClassTest extends TestCase
{

    /** @test */
    public function function_should_return_true()
    {
        $bool = FirstClass::returnTrue();
        $this->assertTrue($bool);
    }
}
