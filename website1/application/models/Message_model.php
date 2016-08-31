<?php
/**
 * Created by PhpStorm.
 * User: dhamez
 * Date: 8/31/16
 * Time: 7:22 AM
 */
class Message_model extends CI_Model{
    public function create($receiver_id, $sender_id, $message, $parent_id = FALSE){
        $message = array(
            'sender_user_id' => $sender_id,
            'receiver_user_id' => $receiver_id,
            'message' => $message
        );

        if($parent_id){
            $message['parent_message_id'] = $parent_id;
        }

        $this->db->insert('message', $message);
        return $this->db->insert_id();
    }

    public function get_all($user_id){
        $this->db
            ->select('m.*, u.id user_id, u.first_name, u.last_name')
            ->from('message m')
            ->join('users u', 'u.id = m.sender_user_id')
            ->where('m.receiver_user_id', $user_id)
            ->order_by('m.create_date','desc');

        return $this->db->get()->result_array();
    }
}