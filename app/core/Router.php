<?php

class Router{
    
    public function run() {
        
        $controller = isset($_GET['controller']) ? $_GET['controller'] : 'Home'; //sets 'home' as routing default value 

        //create routing logic
        $controller = ucfirst(strtolower($controller) ) .'Controller';
        $controllerFile = "../app/controllers/$controller.php";
        //

        //
        if (file_exists($controllerFile)) { // Check if the controller file exists
            require_once $controllerFile; // Include the controller file (only once)

            $controllerInstance = new $controller(); // Create an instance of the controller class

            if (method_exists($controllerInstance, "index")) { // Check if the "index" method exists in the class
                $controllerInstance->index(); // Call the "index" method
            } else {
                echo "Error: index method not found"; // Error if the "index" method does not exist
            }
        } else {
            echo "Error: controller file not found"; // Error if the controller file does not exist
        }
    }

}
?>