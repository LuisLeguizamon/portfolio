<?php

use data\Contact;
use data\Project;
use data\TechStack;
use data\Tool;

include('data/Project.php');
include('data/TechStack.php');
include('data/Tool.php');
include('data/Contact.php');

$project = new Project();
$techStack = new TechStack();
$tool = new Tool();
$contact = new Contact();
?>