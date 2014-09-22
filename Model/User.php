<?php
class User extends AppModel{

    //Validation
    public $validate = array(
        'username' => array(
            array(
                'rule' => 'alphaNumeric',
                'message'=> '英数字で入力してください'
            ),
            array(
                'rule'=> array('minLength', 4),
                'message' => '短すぎます'
            ),
            array(
                'rule'=> array('maxLength', 255),
                'message' => '長すぎます'
            ),
            array(
                'rule' => array('isUnique'),
                'message' => '既に登録されているユーザです'
            )
        ),
        'password' => array(
            array(
                'rule' => 'alphaNumeric',
                'message'=> '英数字で入力してください'
            ),
            array(
                'rule'=> array('minLength', 4),
                'message' => '短すぎます'
            ),
            array(
                'rule'=> array('maxLength', 255),
                'message' => '長すぎます'
            )
        )
    );
        
    //before save
    public function beforeSave($options = array()){
        //encryption
        if(!empty($this->data[$this->alias]['password'])){
            $this->data[$this->alias]['password'] = AuthComponent:: password($this->data[$this->alias]['password']);

        }
        return true;
    }
    
}