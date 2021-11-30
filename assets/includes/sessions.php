<?php
    session_start();

    function errorMessage(){
       if (isset($_SESSION['errormessage'])) {
        $output = "<div class=\"alert alert-danger text-center my-3 alert-dismisable\" role=\"alert\">";
        $output .= htmlentities($_SESSION['errormessage']);
        $output.= "</div>";

        
        $_SESSION['errormessage'] = null;

        return $output;
       }
    }

    function successMessage(){
        if (isset($_SESSION['successmessage'])) {
                    $output = "<div class=\"alert text-center my-3 alert-success alert-dismisable\" role=\"alert\">";
                $output .= htmlentities($_SESSION['successmessage']);
                $output.= "</div>";

                $_SESSION['successmessage'] = null;

                return $output;
            }
        }
?>
