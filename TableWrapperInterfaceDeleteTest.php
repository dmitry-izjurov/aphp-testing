<?php

declare(strict_types=1);
require_once("./autoload.php");
use \PHPUnit\Framework\TestCase;

class TableWrapperInterfaceDeleteTest extends TestCase
{
    /**
     * @param int $id
     * @param mixed $expected
     * @dataProvider providerDelete
     * @return void
     */

    public function testDelete(int $id, mixed $expected): void
    {
        $user = new UserTableWrapper();
        $deleteResult = $user->delete($id);
        $this->assertEquals($deleteResult, $expected);
    }

    public function providerDelete(): array
    {
        return [
            'test 1' => [
                1,
                null
            ],'test 2' => [
                2,
                null
            ]
        ];
    }
}