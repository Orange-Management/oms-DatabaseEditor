<?php
/**
 * Orange Management
 *
 * PHP Version 8.0
 *
 * @package   Modules\DatabaseEditor\Models
 * @copyright Dennis Eichhorn
 * @license   OMS License 1.0
 * @version   1.0.0
 * @link      https://orange-management.org
 */
declare(strict_types=1);

namespace Modules\DatabaseEditor\Models;

use Modules\Admin\Models\AccountMapper;
use phpOMS\DataStorage\Database\DataMapperAbstract;

/**
 * Mapper class.
 *
 * @package Modules\DatabaseEditor\Models
 * @license OMS License 1.0
 * @link    https://orange-management.org
 * @since   1.0.0
 */
final class QueryMapper extends DataMapperAbstract
{
    /**
     * Columns.
     *
     * @var array<string, array{name:string, type:string, internal:string, autocomplete?:bool, readonly?:bool, writeonly?:bool, annotations?:array}>
     * @since 1.0.0
     */
    protected static array $columns = [
        'db_editor_query_id'          => ['name' => 'db_editor_query_id',         'type' => 'int',      'internal' => 'id'],
        'db_editor_query_title'       => ['name' => 'db_editor_query_title',      'type' => 'string',   'internal' => 'title'],
        'db_editor_query_type'        => ['name' => 'db_editor_query_type',      'type' => 'string',   'internal' => 'type'],
        'db_editor_query_host'        => ['name' => 'db_editor_query_host',      'type' => 'string',   'internal' => 'host'],
        'db_editor_query_port'        => ['name' => 'db_editor_query_port',      'type' => 'int',   'internal' => 'port'],
        'db_editor_query_db'          => ['name' => 'db_editor_query_db',      'type' => 'string',   'internal' => 'db'],
        'db_editor_query_query'       => ['name' => 'db_editor_query_query',      'type' => 'string',   'internal' => 'query'],
        'db_editor_query_result'      => ['name' => 'db_editor_query_result',      'type' => 'string',   'internal' => 'result'],
        'db_editor_query_created_by'  => ['name' => 'db_editor_query_created_by', 'type' => 'int',      'internal' => 'createdBy', 'readonly' => true],
        'db_editor_query_created_at'  => ['name' => 'db_editor_query_created_at', 'type' => 'DateTimeImmutable', 'internal' => 'createdAt', 'readonly' => true],
    ];

    /**
     * Primary table.
     *
     * @var string
     * @since 1.0.0
     */
    protected static string $table = 'db_editor_query';

    /**
     * Created at.
     *
     * @var string
     * @since 1.0.0
     */
    protected static string $createdAt = 'db_editor_query_created_at';

    /**
     * Primary field name.
     *
     * @var string
     * @since 1.0.0
     */
    protected static string $primaryField = 'db_editor_query_id';

    /**
     * Belongs to.
     *
     * @var array<string, array{mapper:string, external:string}>
     * @since 1.0.0
     */
    protected static array $belongsTo = [
        'createdBy' => [
            'mapper'     => AccountMapper::class,
            'external'   => 'db_editor_query_created_at',
        ],
    ];
}
