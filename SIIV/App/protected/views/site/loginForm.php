<?php

return array(
    'title'=>'Please provide your login credential',
 
    'elements'=>array(
        'login'=>array(
            'type'=>'text',
            'maxlength'=>32,
        ),
        'password'=>array(
            'type'=>'password',
            'maxlength'=>32,
        )
    ),
 
    'buttons'=>array(
        'submit'=>array(
            'type'=>'submit',
            'label'=>'Login',
        ),
    ),
);