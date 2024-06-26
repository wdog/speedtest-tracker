<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{
    public bool $auth_enabled;

    public int $prune_results_older_than;

    public ?string $speedtest_schedule;

    /** @var string[] */
    public $speedtest_server;

    /**
     * @deprecated Use APP_NAME environment variable.
     */
    public string $site_name;

    public string $time_format;

    public string $timezone;

    public bool $db_has_timezone;

    /**
     * @deprecated Use PUBLIC_DASHBOARD environment variable.
     */
    public bool $public_dashboard_enabled;

    public static function group(): string
    {
        return 'general';
    }
}
