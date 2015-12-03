<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

return [
    'customerAdded' => [
        'name' => 'customerAdded',
        'is_synchronous' => false,
        'request' => 'Magento\Customer\Api\Data\CustomerInterface',
        'request_type' => 'object_interface',
        'response' => null,
        'handlers' => [
            'customerCreatedFirst' => [
                'type' => 'Magento\Customer\Api\CustomerRepositoryInterface',
                'method' => 'save',
                'disabled' => false
            ],
        ],
    ],
    'customerCreated' => [
        'name' => 'customerCreated',
        'is_synchronous' => false,
        'request' => 'Magento\Customer\Api\Data\CustomerInterface',
        'request_type' => 'object_interface',
        'response' => null,
        'handlers' => [
            'default' => [
                'type' => 'Magento\Customer\Api\CustomerRepositoryInterface',
                'method' => 'save',
                'disabled' => true
            ],
        ],
    ],
];
