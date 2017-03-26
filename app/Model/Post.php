<?php

class Post extends AppModel {
    public $validate = array(
        'user_name' => array(
            'rule-1' => array(
                'rule' => 'alphanumeric',
                'message' => 'insert only numbers or words'
            ),
            'rule-2' => array(
                'rule' => 'notBlank',
                'message' => 'field should be not empty'
            )
        ),
        'Email' => array(
            'rule-1' => array(
                'rule' => 'email',
                'message' => 'insert email type'
            ),
            'rule-2' => array(
                'rule' => 'notBlank',
                'message' => 'field should be not empty'
            )
        ),
        'user_text' => array(
            'rule-1' => array(
                'rule' => '/<(.|\n)*?>/',
                'message' => 'Html tags are not allowed in that field'
            ),
            'rule-2' => array(
                'rule' => 'notBlank',
                'message' => 'field should be not empty'
            )
        ),
        'Homepage' => array(
            'rule' => 'url',
            'allowEmpty' => true,
            'message' => 'field should be URL type'
        )
    );
}