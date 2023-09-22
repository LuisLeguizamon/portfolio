<?php

use data\Contact;
use src\data\Project\CommercialProject;
use data\Project\OpenSourceProject;
use data\TechStack;
use data\Tool;

include('src/data/Project/ProjectInterface.php');
include('src/data/Project/CommercialProject.php');
include('src/data/Project/OpenSourceProject.php');
include('src/data/TechStack.php');
include('src/data/Tool.php');
include('src/data/Contact.php');

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