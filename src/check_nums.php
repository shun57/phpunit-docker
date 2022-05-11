<?php

declare(strict_types=1);

interface CheckNumsIF {
    public function somtimesError(): void;
}

class CheckNums implements CheckNumsIF
{
    public function somtimesError(): void
    {
        if (mt_rand(0, 10) < 4) {
            throw new Error("fail!");
        }
    }
}