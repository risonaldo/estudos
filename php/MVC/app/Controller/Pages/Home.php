<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Organization;

class Home extends Page
{

    public static function getHome()
    {
        $obOrganization = new Organization();
        $content = View::render('pages/home', [
            'name' => $obOrganization->name,
            'description' => $obOrganization->descripton,
            'site' => $obOrganization->site
        ]);
        return parent::getPage('Risonaldo - HOME', $content);
    }
}
