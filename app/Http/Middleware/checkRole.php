<?php

namespace App\Http\Middleware;

use Closure;

class checkRole{

    /**
     * Handle an incoming request
     *
     * @param \Illuminate\Http\Request $request
     *
     * @param \Closure $next
     *
     * @return mixed
     *
     */

    public function handle( $request , Closure $next){




        $roles = $this->getRequiredRoleForRoute($request->route());

        //check if a role is required for the route, and
        // if so, ensure that the user has that role

        if($request->user()->hasRole($roles) || !$roles){
            return $next($request);
        }
        return response([
            'error' => [
                'code' => 'INSUFFICIENT_ROLE',
                'Description' => 'you have no authorized to access this route'
            ]
        ] ,401);
    }


    private function getRequiredRoleForRoute( $route){
          $actions = $route->getAction();
            return isset($actions['roles']) ? $actions['roles'] :null;
        }






}