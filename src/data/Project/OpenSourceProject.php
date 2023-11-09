<?php
namespace data\Project;

class OpenSourceProject implements ProjectInterface
{
    public function getProjects(): array
    {
        $openSourceProjects = [
            'Mailgun Logs' => 'https://github.com/zentcodepy/mailgun-logs-by-domain',
            'Whatsapp Widget Plugin' => 'https://github.com/LuisLeguizamon/whatsapp-widget-plugin',
            'Subscription Backend' => 'https://github.com/zentcodepy/subscriptions-manager-backend',
            'Subscription Frontend' => 'https://github.com/zentcodepy/subscriptions-manager-frontend',
        ];

        return $openSourceProjects;
    }
}