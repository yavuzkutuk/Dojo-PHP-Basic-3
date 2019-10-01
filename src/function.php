<?php

function sayHello(string $name="Dr. Manhattan")
{
    return "Hello ".$name;
}

function whoAmi(string $name, array $watchmen)
{
    return (in_array($name,$watchmen))? $name." est un watchmen":null;
}