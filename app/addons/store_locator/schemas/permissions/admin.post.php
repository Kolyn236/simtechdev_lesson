<?php
/***************************************************************************
 *                                                                          *
 *   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
 *                                                                          *
 * This  is  commercial  software,  only  users  who have purchased a valid *
 * license  and  accept  to the terms of the  License Agreement can install *
 * and use this program.                                                    *
 *                                                                          *
 ****************************************************************************
 * PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
 * "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
 ****************************************************************************/

defined('BOOTSTRAP') or die('Access denied');

/** @var array $schema */

$schema['store_locator'] = [
    'permissions' => ['GET' => 'view_store_locator', 'POST' => 'manage_store_locator'],
    'modes' => [
        'delete'            => [
            'permissions' => 'manage_store_locator'
        ],
        'm_delete'          => [
            'permissions' => 'manage_store_locator'
        ],
        'm_update_statuses' => [
            'permissions' => 'manage_store_locator'
        ],
    ],
];
$schema['tools']['modes']['update_status']['param_permissions']['table']['store_locations'] = 'manage_store_locator';

$schema['exim']['modes']['export']['param_permissions']['section']['pickup'] = 'view_store_locator';
$schema['exim']['modes']['import']['param_permissions']['section']['pickup'] = 'manage_store_locator';

return $schema;
