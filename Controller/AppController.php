<?php
class AppController extends Controller{

    //component settings
    public $components = array(
        
        //Using Auth component
        'Auth' => array(
            'authenticate' => array(
                'all' => array(
                    'fields' => array(
                        'username' => 'username',
                        'password' => 'password'
                    )
                ),
                'Form'
            )
        ),
        
        //Using Session Component
        'Session'
    );              
    
}