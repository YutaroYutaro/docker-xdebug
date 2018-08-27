<?php
class CalcCalcTest extends PHPUnit\Framework\TestCase
{

    protected $object;

    protected function setUp()
    {
        // テストするクラスのインスタンスを生成
        $this->object = new Tests\CalcCalc();
    }

    public function testMultiply()
    {
        // 引数に3,4を渡すと8が返ってくることを確認する
        $this->assertEquals(12, $this->object->multiply(3, 4));
    }

    public function testRemainder()
    {
        // 引数に8,3を渡すと5が返ってくることを確認する
        $this->assertEquals(2, $this->object->remainder(8, 3));
    }
}