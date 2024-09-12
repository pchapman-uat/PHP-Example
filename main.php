<?php
    // These 3 tags are needed to allow the website hosted on a different port to comunicate with the php server.
    // This could be changed to limit to specific port(s)
    header("Access-Control-Allow-Origin: *"); // Allow requests from any origin
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS"); // Allow specific HTTP methods
    header("Access-Control-Allow-Headers: Content-Type"); // Allow specific headers


    echo "Hello World";
