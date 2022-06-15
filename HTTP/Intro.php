<?php

/*
HTTP Protocol
    http://
    It stands for Hyper Text Transfer Protocol
    It's responsifor for communication between web servers
    & clientes. So everytime you open up your browser and
    you visit a web page or you submit a form, or you click
    a button tha sends some kind of ajax request or fetch
    request, something like that ou ar eusing HTTP and
    going through that's called the request and response
    cycle 
    HTTP Requests / Responses
    Loading pages, form submit, Ajax calls

HTTP IS STATELESS
        It means that every request is completly independant.
    So when ou move to another page or reload the page
    it doesn't remember previous transaction. You can kind
    of look at each request as a single transaction
        It's similar to transactions
        Programming, Local Storage, Cookies, Sessions are
    used to create enhanced user experiences.

WHAT IS HTTPS?
        Hyper Text Transfer Protocol Secure
        It's basiclly where all the data thats sent 
    back en f forth is encrypted by something called SSL 
    which stands for secure sockets layer or by TLS which
    is the transport security layer. So every time that we
    have users that are sending sensitive information
    we should always be over https (credit card data,
    social security numbers, contact forms, etc). We
    can do this by installing a certificate on our
    web host and there is different levels of security 
    and different levels of certificates as well.
        SSL / TLS
        Certificate 

HTTP METHODS 
    # GET
        Retrieves/Get/Fetch data from the server this 
    could be just loading a standard html page,
    loading assets like css or images, json data, xml data
    etc.

    # POST
        Submit data to the server. Typically when you submit
    a form like contact form when are making a post request.
    When we are creating a new blog post its also a post
    request. Its not recure to use a get request with a 
    form because the information will be visible unless
    is some kind of search form where all you're doing is
    filtering data that's coming back from the server 
    you're not actually posting anything. 

    # PUT
        Update data already on the server. For example, 
    if I want to edit the post that I already have pusted.

    # DELETE
        Deletes data from the server
    
HTTP HEADER FIELDS
    With each request and response using http we have something
    called the HEADER and have something called the BODY.

    The BODY typically with a response is going to be the
    HTML page that we're trying to load, the JSON data, 
    whatever is being sent from the server and then when
    we make a request we can also send a request body for 
    instance.

    When it comes to the header, it also have request 
    headers and response headers in something called
    the GENERAL HEADER. So its basiclly divided into
    three parts and there's different fields on each
    part

    *PRINT DA TABELA* 
        # GENERAL
            Request URL - the url that we are requestions
            Request Method - see if its a get or post request
            Status Code - the most important!
            Remote Address - IP of the remote computer
            Referrer Policy 

        # RESPONSE
            Server - if its apache or nginx. This is hidden to protection
            Set-Cookie - its used for ser servers to send small pieces of data called cookies from that server to the client
            Content-Type - the content, for example a HTML page
            Content-Length - the length
            Date 

        # REQUEST
            Cookies 
            Accept-xxx 
            Content-Type
            Content-Length
            Authorization - validate a user to access a content
            User-Agent
            Referrer - refering site

HTTP STATUS CODES
    1xx:Informational
        Request recieved / processing

    2xx:Sucess
        Successfully Recieved, understood and accepted
    
    3xx:Redirect
        Further action must be taken/redirect 
    
    4xx:Client Eroor 
        Request does not have what it needs

    5xx:Server Error
        Server failed to fulfil an apparent valid request

    *VEJA O PRINT* 

    200 - OK
    201 - Ok created
    301 - Moved to new URL
    304 - Not modified (Cached version)
    400 - Bad request
    401 - Unauthorized
    404 - Not found
    500 - Internal server error

HTTP/2 (VERSION 2)
    # Major revision of HTTP
    # Under the hood changes
    # Respond with more data
    # Reduce latency by enabling full request and response multiplexing
    # Fast, efficient & secure

    *VEJA O PRINT* 

SOME TOOLS TO WORK WITH 
# Express 
# Postman



*/











