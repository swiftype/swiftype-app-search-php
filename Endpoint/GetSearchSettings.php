<?php
/**
 * This file is part of the Swiftype PHP Client package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Swiftype\AppSearch\Endpoint;

/**
 * Implementation of the  endpoint.
 *
 * @package Swiftype\AppSearch\Endpoint
 */
class GetSearchSettings extends \Swiftype\Endpoint\AbstractEndpoint
{
    // phpcs:disable
    /**
     * @var string
     */
    protected $method = 'GET';

    /**
     * @var string
     */
    protected $uri = '/engines/{engine_name}/search_settings';

    protected $routeParams = ['engine_name'];
    // phpcs:enable
}
