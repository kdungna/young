<?php
/**
 * Created by PhpStorm.
 * User: Administrator PC
 * Date: 10/28/2015
 * Time: 3:53 PM
 */
class User extends AppModel {
    public $useTable = 'users';
    public $validate = array(
        'username' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => "Username is the required field"
            ),
        ),
        'password' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => "Username is the required field"
            ),
            'minLength' => array(
                'rule' => array('minLength', '8'),
                'message' => 'Minimum 8 characters long'
            ),
        )

    );
}