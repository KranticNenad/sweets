<?php
    namespace App\Core;

    final class Router {
        private $routes = [];

        public function __construct(){  
        }
        
        public function add(Route $route){
            $this->routes[] = $route; 
        }

        public function &find (string $method, string $url): Route{
            $foundRoute = NULL;
            foreach ($this->routes as $route){
                if ($route->matches($method, $url)){
                    $foundRoute = $route;
                    break;
                }
            }
            return $foundRoute;
        }
    }