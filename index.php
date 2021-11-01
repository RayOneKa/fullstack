<?php

function test ()
{
    echo 'Hello, World!';
}

function br ()
{
    echo '<br>';
}

function sayHello ($name = 'Stranger!')
{
    echo "Hello, $name";
}

function sayMessage ($message, $name = 'Stranger!')
{
    echo "$message, $name";
}

test();

br();
echo '<hr>';
echo 'some text';
br();

test();
br();
test();
br();

$name = 'Ivan';
sayHello($name);
br();

$info = 'Rail';
sayHello($info);
br();

sayHello('Masha');
br();

sayHello();
br();

$message = 'Good morning';
$name = 'Rail';
sayMessage($message, $name);
br();
sayMessage($message);