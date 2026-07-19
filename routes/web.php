<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
    return "Welcome to my Laravel learning journey!";
});

Route::get('/contact', function(){
    return "Contact us";
});

/*
Routing

Create a small personal website using routes only.
Add these URLs:

/
Displays:
Welcome to My Portfolio

/about
Displays:
Your name
Your university
Your degree

/skills
Displays:
PHP
Laravel
Java
MySQL
Git

/contact
Displays your email address.
*/

Route::get('/', function(){
    return "Welcome to my portfolio";
});

Route::get('/about', function(){
    return "Matheesha Induwara<br>SUSL<br>CIS";
});

Route::get('/skills', function(){
    return "PHP<br>Laravel<br>Java<br>MySQL<br>Git";
});

Route::get('/contact', function(){
    return "matheesha000@gmail.com";
});

//Route Parameters

Route::get('/course/{course}', function($course){
    return "Course: ".$course;
});

/*
Create a route:

/profile/{name}/{degree}/{university}

Display all three values with HTML line breaks.

Example:
Name: Matheesha
Degree: CIS
University: SUSL
*/

Route::get('/profile/{name}/{degree}/{university}', function($name,$degree,$university){
    return "Name: ".$name."<br>Degree: ".$degree."<br>University: ".$university;
});

