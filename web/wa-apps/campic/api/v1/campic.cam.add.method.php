<?php

class campicCamAddMethod extends waAPIMethod
{
    protected $method = 'POST';

    public function execute()
    {
        $servers_model = new campicServersModel();
        $server = $servers_model->getRandServer();

        if (!empty($server)) {
            $token = $this->get('access_token');
            $model = new waModel();
            $contact_id = $model->query('SELECT contact_id FROM wa_api_tokens WHERE token = s:token', array('token' => $token))->fetchField();
            $contact = new waContact($contact_id);
            $email = campicHelper::getEmail($contact);

            $fake_username = strstr($email, '@', true) . $contact_id;

            $cams_model = new campicCamsModel();
            $cams = $cams_model->getCams($contact_id);
            if (empty($cams)) {
                $num = 30;
            }
            else {
                $max_cam_num = $cams_model->select('MAX(cam_num)')->where('contact_id = ' . intval($contact_id))->fetchField();
                $num = $max_cam_num + 1;
            }

            $cam_name = $fake_username . '-' . $num;
            $password = substr(md5(microtime()), 0, 6);

            $usersClass = 'campic' . ucfirst($server['ftp_type']) . 'UsersModel';
            $ftp_users_model = new $usersClass($server);
            $ftp_user = $ftp_users_model->add($cam_name, $password);

//        $data = array();
            if (!empty($ftp_user)) {
                $data = array(
                    'contact_id' => $contact_id,
                    'server_id' => $server['id'],
                    'ftp_user_id' => $ftp_user['id'],
                    'user' => $cam_name,
                    'password' => $password,
                    'url' => $server['url'],
                    'strategy' => $server['strategy'],
                    'cam_num' => $num,

                );
                $data['id'] = $cams_model->insert($data);
            }

            $cams = campicHelper::getCams($contact_id);
            $this->response = $cams;
        }
        else {
            $this->response = array(
                'error' => _wp('No servers available'),
                'server' => $server,
            );
        }
    }
}