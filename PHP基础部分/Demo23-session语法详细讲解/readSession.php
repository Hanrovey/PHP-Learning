<?php

session_start();

class Student{
	public $name = 'hello world';
}

print_r($_SESSION);