<?php declare(strict_types=1);

namespace Squad;

use OpenAI\Factory;
use OpenAI\Client;

class ChatOpenAI implements Chat
{
    private Client $client;

    public function __construct(
        private readonly string $apiKey
    )
    {
        $this->client = (new Factory())
            ->withApiKey($this->apiKey)
            ->withOrganization('')
            ->withHttpHeader('OpenAI-Beta', 'assistants=v2')
            ->make();
    }

    public function sendMessage(string $message): string
    {
        $result = $this->client->chat()->create([
            'model' => 'gpt-4',
            'messages' => [
                ['role' => 'user', 'content' => $message],
            ],
        ]);

        return $result->choices[0]->message->content;
    }
}