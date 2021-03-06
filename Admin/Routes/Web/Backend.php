<?php declare(strict_types=1);

use Modules\DatabaseEditor\Controller\BackendController;
use Modules\DatabaseEditor\Models\PermissionState;
use phpOMS\Account\PermissionType;
use phpOMS\Router\RouteVerb;

return [
    '^.*/dbeditor/list.*$' => [
        [
            'dest'       => '\Modules\DatabaseEditor\Controller\BackendController:viewDatabaseEditorList',
            'verb'       => RouteVerb::GET,
            'permission' => [
                'module' => BackendController::MODULE_NAME,
                'type'   => PermissionType::READ,
                'state'  => PermissionState::DATABASE_EDITOR,
            ],
        ],
    ],
    '^.*/dbeditor/editor.*$' => [
        [
            'dest'       => '\Modules\DatabaseEditor\Controller\BackendController:viewDatabaseEditorEditor',
            'verb'       => RouteVerb::GET,
            'permission' => [
                'module' => BackendController::MODULE_NAME,
                'type'   => PermissionType::READ,
                'state'  => PermissionState::DATABASE_EDITOR,
            ],
        ],
    ],
];
