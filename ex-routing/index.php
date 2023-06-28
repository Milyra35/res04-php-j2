<?php

$paths = [
    [
        "name" => "Home",
        "path" => "home.phtml"
    ],
    [
        "name" => "A propos",
        "path" => "about.phtml"
    ],    
    [
        "name" => "Contact",
        "path" => "contact.phtml"
    ]
];

if(isset($_GET["route"]))
{
    if($_GET["route"] === "about")
    {
        require "about.phtml";
    }
    else if($_GET["route"] === "contact")
    {
        require "contact.phtml";
    }
    else if(empty($_GET["route"]))
    {
        require "404.phtml";
    }
}
else 
{
    require "home.phtml";
}




?>