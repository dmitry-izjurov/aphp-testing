<?php

declare(strict_types=1);
require_once("./autoload.php");
use \PHPUnit\Framework\TestCase;

class TableWrapperInterfaceGetTest extends TestCase
{
    /**
     * @param array $expected
     * @dataProvider providerGet
     * @return void
     */

    public function testGet(array $expected): void
    {
        $user = new UserTableWrapper();
        $getResult = $user->get();
        $this->assertEquals($getResult, $expected);
    }

    public function providerGet(): array
    {
        return [
            'test 1' => [
                [
                    ['Анатолий', 'Иванов'],
                    ['Иван', 'Петров'],
                    ['Илья', 'Сидоров']

                ],
                [
                    ['Анатолий', 'Иванов'],
                    ['Иван', 'Петров'],
                    ['Илья', 'Сидоров']
                ]
            ]
        ];
    }
}