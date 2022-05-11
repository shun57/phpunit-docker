<?php

declare(strict_types=1);

class UserApiService
{
    public function curl_test(string $url): array
    {
        $option = [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT        => 3,
        ];
        
        $ch = curl_init($url);
        curl_setopt_array($ch, $option);
        $json = curl_exec($ch);
        curl_close($ch);
        return json_decode($json, true);
    }
}