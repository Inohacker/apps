<?php
class appsShopSet_saveHandler extends waEventHandler

{
    public function execute(&$params = null, $array_keys = null)
    {
        $hook = array(
            'app' => 'shop',
            'hook' => 'set_save',
            'params' => $params
        );
        $event = wao(new appsEvent())->call($hook);
        return $event;
    }
}
