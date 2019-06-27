<?php

class MySessionHandler extends SessionHandler {
    // Default session data
    private $sessionName = "MYSESSID";
    private $sessionLifeTime = 0;
    private $sessionSSL = false;
    private $sessionHTTPOnly = true;
    private $sessionPath= "/";
    private $sessionDomain= ''; // Website domain
    private $sessionSavePath;

    // Default MCRYPT Extenstion Parameters
    


}