<?php

//namespace persistencia\vo;
//
//use persistencia\generico\IGenericVO;
//
//
//class AssistanceVO  implements IGenericVO {
//    private $id_assistance;
//    private $id_calendar;
//    /**
//     *
//     * @var UserVO
//     */
//    private $id_user;
//    private $reason;
//    private $data;
//    
//    function getId_assistance() {
//        return $this->id_assistance;
//    }
//
//    function getId_calendar() {
//        return $this->id_calendar;
//    }
//
//    function getId_user() {
//        return $this->id_user;
//    }
//
//    function getReason() {
//        return $this->reason;
//    }
//
//    function getData() {
//        return $this->data;
//    }
//
//    function setId_assistance($id_assistance) {
//        $this->id_assistance = $id_assistance;
//    }
//
//    function setId_calendar($id_calendar) {
//        $this->id_calendar = $id_calendar;
//    }
//
//    function setId_user(UserVO $id_user) {
//        $this->id_user = $id_user;
//    }
//
//    function setReason($reason) {
//        $this->reason = $reason;
//    }
//
//    function setData($data) {
//        $this->data = $data;
//    }
//public function getAttributes() {
//        $attributes = array();
//        $attributes['id_assistance'] = $this->id_assistance;
//        $attributes['id_calendar'] = $this->id_calendar;
//        $attributes['id_user'] = $this->id_user;
//        $attributes['reason'] = $this->reason;
//        $attributes['data'] = $this->data;
//        return $attributes;
//    }
//
//    public function convert($info) {
//        $attributes = array_keys(get_object_vars($this));
//        foreach ($attributes as $nombreAtributos) {
//            if (isset($info['ass_' . $nombreAtributos])) {
//                $this->$nombreAtributos = $info['ass_' . $nombreAtributos];
//            }
//        }
//    }
//
//}
