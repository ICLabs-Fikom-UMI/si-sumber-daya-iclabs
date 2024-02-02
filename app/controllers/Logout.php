<?php

class Logout extends Controller  {
    public function DestroySession(){
        session_destroy();
        header("Location: http://localhost:8080/tubesmvc/public/Login");
    }
}