<?php
$app->post('/api/Bitbucket/webhookEvent', function ($request, $response, $args) {
        $webhookMessage = json_decode($request->getBody()->getContents(), true);
        $reply = [
            "http_resp" => '',
            "client_msg" => $webhookMessage,
            "params" => $post_data['args']['params']
        ];

        $result['callback'] = 'success';
        $result['contextWrites']['to'] = $reply;
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

    });