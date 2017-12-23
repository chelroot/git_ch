<?php
/**
 * Created by PhpStorm.
 * User: snark | itfrogs.ru
 * Date: 11/28/15
 * Time: 3:20 PM
 */

class campicCamDeleteMethod extends waAPIMethod
{
    protected $method = 'POST';

    public function execute()
    {
        $token = $this->get('access_token');
        $model = new waModel();
        $contact_id = $model->query('SELECT contact_id FROM wa_api_tokens WHERE token = s:token', array('token' => $token))->fetchField();
        $id = $this->get('cam_id');
        $cams_model = new campicCamsModel();
        $cam = $cams_model->getByField(array(
            'id' => $id,
            'contact_id' => $contact_id,
        ));
        if (!empty($cam)) {
            $servers_model = new campicServersModel();
            $server = $servers_model->getById($cam['server_id']);
            if (!empty($server)) {
                $usersClass = 'campic' . ucfirst($server['ftp_type']) . 'UsersModel';
                $ftp_users_model = new $usersClass($server);
                //$ftp_url = parse_url($cam['url']);
                //$ftp_url = $ftp_url['host'];
                //$conn_id = ftp_connect($ftp_url);
                //$login_result = ftp_login($conn_id, $cam['user'], $ftp_user['passwd']);
                //$contents = ftp_nlist($conn_id, "/");
                $ftp_users_model->deleteById($cam['ftp_user_id']);
            }
            $cams_model->deleteById($id);
        }

        $cams = campicHelper::getCams($contact_id);
        $this->response = $cams;
    }
}