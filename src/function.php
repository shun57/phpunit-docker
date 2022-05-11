<?php

declare(strict_types=1);

require_once(dirname(__FILE__).'/check_nums.php');

function hello(string $day): string
{
    if ($day === 'morning') {
        return 'good morning!';
    };
    return 'hello!';
}

function sumOfArraySomeTimesZero(array $nums, CheckNumsIF $check_nums_obj): int
{
    try {
        // ランダムでエラーを返すメソッド
        $check_nums_obj->somtimesError();

        return array_sum($nums);
    } catch (Throwable $e) {
        return 0;
    }
}

function getUserData(UserApiService $userApiService): void
{
    $url = "https://randomuser.me/api/";
    // APIの実行を行うメソッド
    $userApiService->curl_test($url);
    // なんらかの処理など
}