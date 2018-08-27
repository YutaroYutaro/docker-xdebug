<?php
class CalcTest extends PHPUnit\Framework\TestCase
{

    protected $object;

    protected function setUp()
    {
        // テストするクラスのインスタンスを生成
        $this->object = new Tests\Calc();
    }

    public function testAdd()
    {
        // 引数に3,4を渡すと8が返ってくることを確認する
        $this->assertEquals(7, $this->object->add(3, 4));
    }

    public function testSub()
    {
        // 引数に8,3を渡すと5が返ってくることを確認する
        $this->assertEquals(5, $this->object->sub(8, 3));
    }
}