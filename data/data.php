<?php

use data\Contact;
use data\Project\CommercialProject;
use data\Project\OpenSourceProject;
use data\TechStack;
use data\Tool;

include('data/Project/ProjectInterface.php');
include('data/Project/CommercialProject.php');
include('data/Project/OpenSourceProject.php');
include('data/TechStack.php');
include('data/Tool.php');
include('data/Contact.php');

$commercialProject = new CommercialProject();
$openSourceProject = new OpenSourceProject();

$commercialProjects = $commercialProject->getProjects();
$openSourceProjects = $openSourceProject->getProjects();

$techStack = new TechStack();
$tool = new Tool();
$contact = new Contact();

include_once($_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php');

$dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
$dotenv->safeLoad();

$gtagCode = $_ENV['GOOGLE_ANALYTICS_GTAG_CODE'];
?>