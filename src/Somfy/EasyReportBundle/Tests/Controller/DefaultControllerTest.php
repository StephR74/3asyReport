<?php

namespace Somfy\EasyReportBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndexFooterContainCopyright()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertTrue($crawler->filter('html:contains("Powered by 3asyReport © 2014-2014 Stéphane Rapin ")')->count() == 1);
    }
}
