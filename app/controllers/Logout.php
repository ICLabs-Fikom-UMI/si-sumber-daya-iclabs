<?php

class Logout extends Controller  {
    public function DestroySession(){
        session_destroy();
        header("Location: " . BASEURL . "/Login");
    }
}