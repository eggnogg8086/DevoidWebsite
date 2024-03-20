<?php

use Steampixel\Route;
require $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';


class logins{
    static $auth0;    
    static $session;

    public static function run() {
        // Load our environment variables from the .env file:
        (Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']))->load();

        // Now instantiate the Auth0 class with our configuration:
        self::$auth0 = new \Auth0\SDK\Auth0([
            'domain' => $_ENV['AUTH0_DOMAIN'],
            'clientId' => $_ENV['AUTH0_CLIENT_ID'],
            'clientSecret' => $_ENV['AUTH0_CLIENT_SECRET'],
            'cookieSecret' => $_ENV['AUTH0_COOKIE_SECRET']
        ]);

        define('ROUTE_URL_INDEX', rtrim('https://'.$_SERVER['HTTP_HOST'], '/'));
        define('ROUTE_URL_LOGIN', ROUTE_URL_INDEX . '/login');
        define('ROUTE_URL_CALLBACK', ROUTE_URL_INDEX . '/callback');
        define('ROUTE_URL_LOGOUT', ROUTE_URL_INDEX . '/logout');

        
        Route::add('/', function() {
            self::$session = self::$auth0->getCredentials();
        
            if (self::$session === null) {
                return;
            }
        
            // The user is logged in.
            // echo '<pre>';
            $_SESSION["login"]=self::$session->user;
        });


        Route::add('/login', function(){
            // It's a good idea to reset user sessions each time they go to login to avoid "invalid state" errors, should they hit network issues or other problems that interrupt a previous login process:
            self::$auth0 ->clear();

            // Finally, set up the local application session, and redirect the user to the Auth0 Universal Login Page to authenticate.
            header("Location: " . self::$auth0 ->login(ROUTE_URL_CALLBACK));
            exit;
        });

        Route::add('/iteration1/novel/act1-1', function(){
            header("Location: " . ROUTE_URL_INDEX);
            exit;
        });

        Route::add('/callback', function(){
            // Have the SDK complete the authentication flow:
            self::$auth0 ->exchange(ROUTE_URL_CALLBACK);

            // Finally, redirect our end user back to the / index route, to display their user profile:
            header("Location: " . ROUTE_URL_INDEX);
            exit;
        });


        Route::add('/logout', function() {
            $temp = $_SESSION['lastPage']; 
            
            // Clear the user's local session with our app, then redirect them to the Auth0 logout endpoint to clear their Auth0 session.
            header("Location: " . self::$auth0->logout(ROUTE_URL_INDEX));
            session_unset();
            session_destroy();

            session_start();
            $_SESSION['lastPage'] = $temp; 

            exit;
        });

        Route::run('/');
    }
}
?>