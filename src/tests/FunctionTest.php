<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once(dirname(__FILE__).'/../function.php');
require_once(dirname(__FILE__).'/../check_nums.php');
require_once(dirname(__FILE__).'/../user_api_service.php');

class FunctionTest extends TestCase
{
    public function testMorning(): void
    {
        $day = 'morning';
        $this->assertSame(hello($day), 'good morning!');
    }

    public function testEvening(): void
    {
        $day = 'evening';
        $this->assertSame(hello($day), 'good evening!');
    }

    public function testHello(): void
    {
        $day = 'evening';
        $this->assertSame(hello($day), 'hello!');
    }

    public function testSumOfArrayWithStub(): void
    {
        $nums = [1, 2];
        // CheckNumsクラスのスタブを作る
        $stub = $this->createStub(CheckNums::class);
        // 何も返さないスタブの設定を行う
        $stub->method('somtimesError');

        $result = sumOfArraySomeTimesZero($nums, $stub);
        $this->assertSame($result, 3);
    }

    public function testSomeTimesZeroWithStub(): void
    {
        $nums = [1, 2];
        // CheckNumsクラスのスタブを作る
        $stub = $this->createStub(CheckNums::class);
        // 例外を出力するスタブの設定を行う
        $stub->method('somtimesError')
            ->will($this->throwException(new Exception));

        $result = sumOfArraySomeTimesZero($nums, $stub);
        $this->assertSame($result, 0);
    }

    public function testGetUserData(): void
    {
        $url = 'https://randomuser.me/api/';
        // UserApiServiceクラスのモックを作る
        $mock = $this->createMock(UserApiService::class);

        $mock->expects($this->once()) // 1度だけ呼ばれる
            ->method('curl_test') // 対象メソッド
            ->with($url); // 引数が指定の値になっているか
 
        getUserData($mock);
    }
}