<?php

/*
WHAT IS A WEB SERVER?
    # LISTENS
        The web server is waiting and listen.
    It is listening the network port provited
    by the operating systems that the web
    server is running on, for example windows,
    mac, etc

    # ON A PORT
        The protocol that we uses provides 
    65.535 ports. So we have to provite the 
    port that we want to connect
        http -> 80
        https -> 443
        The web browser automatically provides by default:
        http://127.0.0.1:80 
,
    # FOR A REQUEST
        HTTP (The language that the web server uses)
        It's based on text
        Example:
            GET / orders/123 HTTP/1.1 
            Host: 127.0.0.1:8000
            User-Agent: Manual-Http-Request
                If it was a POST request, it would have a body and a contect
        
    # sends a TRANSPORT

    # PROTOCOL

    # returns a RESPONSE

    # containing the requested RESOURCE

Defination 
    Static routing
    Dynamic routing

NGINX
    It's like a gateway that stands between the internet
    and your back-end infrastructure. When you visit
    a web app, the first place your request will go
    is to a web server. The web server will look at the 
    requested resource and determine where to find it on
    the server and then send it back as the response.

    NGIX can handle more than 10.000 simultaneous
    connections with its event driven architecture. 
    It's also commonly used as a reverse proxy
    where it acts as a traffic light to distribute 
    the load to multiple backend servers while also
    providing security and caching for better 
    performance. 

    In most cases, it'll be installed on a linux 
    server with the configuration filebeing found in
    the etc directoty. 

    You costumize the behavior of your server by 
    by defining directives. 

    A directive is just a key value pair or if followed
    by braces its known as a context which itself holds
    more directives. 

    Proxy server
    Private app server



*/






