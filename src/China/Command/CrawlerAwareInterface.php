<?php
/*
 * This file is part of the Slince/China package.
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace China\Command;

use Goutte\Client;

interface CrawlerAwareInterface
{
    /**
     * 获取Goutte Client.
     *
     * @return Client
     */
    public function getClient();
}