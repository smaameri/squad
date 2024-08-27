<?php declare(strict_types=1);

namespace Squad;

interface Chat
{
    public function sendMessage(string $message): string;
}