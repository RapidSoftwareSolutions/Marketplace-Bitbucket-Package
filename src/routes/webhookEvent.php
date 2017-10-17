<?php
$app->post('/api/Bitbucket/webhookEvent', function ($request, $response, $args) {
        // $checkRequest = $this->validation;
        // $validateRes = $checkRequest->validate($request, []);
        // if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        //     return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
        // } else {
        //     $post_data = $validateRes;
        // }
            $post_data = $request->getParsedBody();
        $reply = [
            "http_resp" => '',
            "client_msg" => $post_data,
            "params" => $post_data['args']['params']
        ];

        $result['callback'] = 'success';
        $result['contextWrites']['to'] = $reply;
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

    });