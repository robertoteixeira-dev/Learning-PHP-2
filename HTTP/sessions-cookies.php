<?php
session_start();

/*
    Sessions and cookies are generally used to store information
    that persist across requests. Requests in PHP are stateless 
    but sessions and cookies can be used in adition to other 
    things like databases, caches, files etc to retain the state.

    The difference between cookies and sessions: 
        Coockies are stored on a client's site, on user's computer
        for example while sessions are stored on the server. Also by
        default session is destroyed as soon as the browser is closed
        while cookies can remain as long as the set expiration date or
        until the cookie is deleted. 

    When we put the session_start(); it will create a session ID
    

*/

// phpinfo(); - shows the php infos






