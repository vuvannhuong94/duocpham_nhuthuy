<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Cake\Network\Exception\InternalErrorException;
use Cake\Utility\Text;

class UploadComponent extends Component{   
   
    public function send($data) {
         if (!empty($this->request->data)) {
                if (!empty($this->request->data['image']['name'])) {
                    $file = $this->request->data['image'];
                    $ext = substr(strtolower(strrchr($file['name'], '.')), 1);
                    $arr_ext = array('jpg', 'jpeg', 'png');
                    if (in_array($ext, $arr_ext)) {
                        move_uploaded_file($file['tmp_name'], WWW_ROOT . 'avatar/' . $file['name']);
                        $this->request->data['image'] = '/avatar/'.$file['name'];
                    }
                }
            }
    }
}
