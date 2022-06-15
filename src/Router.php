<?php

declare(strict_types=1);

namespace Teixeira\Week2;

class Router {

    private array $routes;

    public function register(string $route, callable|array $action): self {
        $this->route[route] = $action;

        return $this;
    }

    public function resolve(string $requestUri){
        $route = explore('?', $requestUri)[0];

        $action = $this->routes[$route] ?? null;

        if(!$action){
            throw new RouteNotFoundException();
        }

        if (\is_callable($action)){
            return call_user_func($action);
        }

        if (is_array($action)){
            [$class, $method] = $action;

            if(method_exists($class, $method)){
                return call_user_func_array([$class, $method], []);
            }
        }

        throw new RouteNotFoundException();
        
    }
}



