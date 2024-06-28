<?php 

class Contact extends AppModel {
    public $validate = array(
        'name' => array(
            'minLength' => array(
                'rule' => array('minLength', '2'),
                'message' => 'Seu nome deve conter pelo menos 2 caractéres'
            )
        ),
        'email' => array(
            'rule' => 'email',
            'message' => 'Email inválido'
        ),
        'message' => array(
            'between' => array(
                'rule' => array('lengthBetween', 5, 500),
                'message' => 'Sua mensagem deve ter entre 5 e 500 caractéres'
            )
        ),
    );
}