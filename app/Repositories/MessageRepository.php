<?php

namespace App\Repositories;

use App\Models\Message;

class MessageRepository
{
    /**
     * @var Message
     */
    private $_model;

    public function __construct(Message $message)
    {
        $this->_model = $message;
    }

    /**
     * @param array $data
     * @return Message|null
     */
    public function store(array $data): ?Message
    {
        return $this->_model->create([
            'name' => $data['name'] ?? '',
            'email' => $data['email'],
            'message' => $data['message'],
        ]);
    }

}
