<?php

namespace Application\Form;

use Zend\Form\Form;

class RegisterForm extends Form {

    public function __construct($name = null) {
        parent::__construct('Register');
        $this->setAttribute('method', 'post');
        $this->setAttribute('enctype', 'multipart/form-data');

        $this->add(array(
            'name' => 'name',
            'attributes' => array(
                'type' => 'text',
                'required' => 'required'
            ),
            'options' => array(
                'label' => 'Full Name',
            ),
        ));


        $this->add(array(
            'name' => 'email',
            'attributes' => array(
                'type' => 'email',
                'required' => 'required'
            ),
            'options' => array(
                'label' => 'Email',
            ),
        ));


    


 

   

        $this->add(array(
            'name' => 'password',
            'attributes' => array(
                'type' => 'password',
                'required' => 'required'
            ),
            'options' => array(
                'label' => 'Password',
            ),
        ));

        $this->add(array(
            'name' => 'confirm_password',
            'attributes' => array(
                'type' => 'password',
                'required' => 'required'
            ),
            'options' => array(
                'label' => 'Confirm Password',
            ),
        ));
        
        // Add the CSRF field
        $this->add(array(
            'type' => 'csrf',
            'name' => 'csrf',
            'options' => array(
                'csrf_options' => array(
                'timeout' => 600
                )
            ),
         ));
        
        $this->add(array(
            'type' => 'captcha',
            'name' => 'captcha',
            'attributes' => array(
                ),
            'options' => array(
                'label' => 'Human check',
            'captcha' => array(
                'class' => 'Image',
                'imgDir' => 'public/img/captcha',
                'suffix' => '.png',
                'imgUrl' => '/img/captcha/',
                'imgAlt' => 'CAPTCHA Image',
                'font' => './public/fonts/ThorneShaded.ttf',
                'fsize' => 24,
                'width' => 350,
                'height' => 100,
                'expiration' => 600,
                'dotNoiseLevel' => 40,
                'lineNoiseLevel' => 3
                ),
            ),
        ));

        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type' => 'submit',
                'value' => 'Register'
            ),
        ));
    }

}
