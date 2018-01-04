<?php

namespace Jormin\TuLing;

use GuzzleHttp\Client;

/**
 * 图灵SDK库
 * @package Jormin\TuLing
 */
class TuLing{

    public $server = 'http://www.tuling123.com/openapi/api';

    private $apiKey;

    /**
     * TuLing constructor.
     * @param $apiKey
     */
    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }
    /**
     * 聊天消息
     *
     * @param $message
     * @param $userID
     * @param $location
     * @return mixed
     */
    public function chat($message, $userID, $location){
        $params = [
            'key' => $this->apiKey,
            'info' => $message,
            'userid' => $userID,
            'loc' => $location
        ];
        $client = new Client();
        $response = $client->post($this->server, [
            'body' => json_encode($params)
        ]);
        return json_decode($response->getBody()->getContents(), true);
    }
}