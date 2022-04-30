<?php

function hello(string $day): string
{
    if ($day === 'morning') {
        return 'good morning!';
    };
    return 'hello!';
}
