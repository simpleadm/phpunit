<?php

include 'Sum.php';

class SumTest extends PHPUnit_Framework_TestCase {

    public function setUp() {
        $this->assertTrue(class_exists('Sum'), 'Sum class not exists');

        $this->sum = new Sum;
        $this->assertTrue($this->sum instanceof Sum, 'Not a Sum object');
    }

    /**
     * 	@dataProvider fibsDataProvider
     * */
    public function testFib($num, $result) {
        $this->assertTrue(method_exists($this->sum, 'fib'), 'fib() method not exists');

        $this->assertEquals($this->sum->fib($num), $result, 'fib() bad result');
    }

    public function fibsDataProvider() {

        return array(
            array(3, array(1, 2, 3)),
            array(4, array(1, 2, 3, 5)),
            array(6, array(1, 2, 3, 5, 8, 13)),
            array(7, array(1, 2, 3, 5, 8, 13, 21)),
            array(10, array(1, 2, 3, 5, 8, 13, 21, 34, 55, 89)),
        );
    }

    /**
     * @dataProvider getEvensDataProvider
     */
    public function testGetEvens($input, $result) {
        $this->assertTrue(method_exists($this->sum, 'getEvens'), 'getEvens() method not exists');

        $this->assertEquals($this->sum->getEvens($input), $result, 'getEvens() bad result');
    }

    public function getEvensDataProvider() {
        return array(
            array(array(1), array()),
            array(array(1, 2), array(2)),
            array(array(1, 2, 3), array(2)),
            array(array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10), array(2, 4, 6, 8, 10)),
        );
    }

    /**
     * @dataProvider fibsSumDataProvider
     * */
    public function testFibSum($max, $result) {
        $this->assertTrue(method_exists($this->sum, 'fibSum'), 'fibSum() method not exists');

        $this->assertEquals($this->sum->fibSum($max), $result, 'fibSum() bad result');
    }

    public function fibsSumDataProvider() {
        return array(
            array(3, 2),
            array(5, 2),
            array(13, 10),
            array(21, 10),
            array(89, 44),
        );
    }

}