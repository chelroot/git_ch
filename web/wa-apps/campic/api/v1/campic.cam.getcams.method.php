<?php

class campicCamGetcamsMethod extends waAPIMethod
{
    protected $method = 'POST';

    public function execute()
    {
        $token = $this->get('access_token');
        $model = new waModel();
        $contact_id = $model->query('SELECT contact_id FROM wa_api_tokens WHERE token = s:token', array('token' => $token))->fetchField();

        $cams = campicHelper::getCams($contact_id);

        $this->response = $cams;
    }
}