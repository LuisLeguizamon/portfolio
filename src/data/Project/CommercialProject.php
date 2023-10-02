<?php

namespace src\data\Project;

use data\Project\ProjectInterface;

class CommercialProject implements ProjectInterface
{
    public function getProjects(): array
    {
        $commercialProjects = [
            'Billing System for a Sport Facility',
            'Buildings Administration Real Estate',
            'Claims Management System',
            'Court Booking mobile App',
            'CrossFit gym mobile App',
            'ERP SaaS',
            'Event Venue Management',
            'Gym Management',
            'Human Resource Management System',
            'Integration with a Sport Fields Booking System',
            'Integration with Facial Detection Access System',
            'Integration with Payment Gateway (Bancard)',
            'Invoice processing module for a mobile App with OCR/Azure',
            'Land Management',
            'LEMP installation on linux servers',
            'Project Management',
            'Real Estate Website',
            'Real Estate Management Platform',
            'Request for Quotation (RFQ) System',
            'School mobile App',
            'Shopping mall mobile App',
            'Voucher System',
            'Web platform for Gym Trainers',
            'Webservice between a Billing System and Microsoft Dynamics 365',
        ];

        return $commercialProjects;
    }
}