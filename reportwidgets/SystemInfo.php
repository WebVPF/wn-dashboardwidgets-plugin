<?php namespace WebVPF\DashboardWidgets\ReportWidgets;

use Backend\Classes\ReportWidgetBase;
use Exception;

class SystemInfo extends ReportWidgetBase
{
    protected $defaultAlias = 'SystemInfoReportWidget';

    public function defineProperties(): array
    {
        return [
            'title' => [
                'title'             => 'backend::lang.dashboard.widget_title_label',
                'default'           => 'webvpf.dashboardwidgets::lang.sysinfo.prop.title_default',
                'type'              => 'string',
                'validationPattern' => '^.+$',
                'validationMessage' => 'backend::lang.dashboard.widget_title_error',
            ],
            'server' => [
                'title'             => 'webvpf.dashboardwidgets::lang.sysinfo.prop.server_title',
                'description'       => 'webvpf.dashboardwidgets::lang.sysinfo.prop.server_desc',
                'type'              => 'checkbox',
                'default'           => true,
            ],
            'server_addr' => [
                'title'             => 'webvpf.dashboardwidgets::lang.sysinfo.prop.server_addr_title',
                'description'       => 'webvpf.dashboardwidgets::lang.sysinfo.prop.server_addr_desc',
                'type'              => 'checkbox',
                'default'           => true,
            ],
            'php' => [
                'title'             => 'webvpf.dashboardwidgets::lang.sysinfo.prop.php_title',
                'description'       => 'webvpf.dashboardwidgets::lang.sysinfo.prop.php_desc',
                'type'              => 'checkbox',
                'default'           => true,
            ],
            'laravel' => [
                'title'             => 'webvpf.dashboardwidgets::lang.sysinfo.prop.laravel_title',
                'description'       => 'webvpf.dashboardwidgets::lang.sysinfo.prop.laravel_desc',
                'type'              => 'checkbox',
                'default'           => true,
            ],
            'twig' => [
                'title'             => 'webvpf.dashboardwidgets::lang.sysinfo.prop.twig_title',
                'description'       => 'webvpf.dashboardwidgets::lang.sysinfo.prop.twig_desc',
                'type'              => 'checkbox',
                'default'           => true,
            ],
            'db' => [
                'title'             => 'webvpf.dashboardwidgets::lang.sysinfo.prop.db_title',
                'description'       => 'webvpf.dashboardwidgets::lang.sysinfo.prop.db_desc',
                'type'              => 'checkbox',
                'default'           => true,
            ],
        ];
    }

    /**
     * Renders the widget's primary contents.
     */
    public function render(): string
    {
        try {
            $this->prepareVars();
        } catch (Exception $ex) {
            $this->vars['error'] = $ex->getMessage();
        }

        return $this->makePartial('systeminfo');
    }

    /**
     * Prepares the report widget view data
     */
    public function prepareVars()
    {
        $this->vars['system_info'] = [
            'server' => explode("/", $_SERVER['SERVER_SOFTWARE'])[0],
            'php' => PHP_MAJOR_VERSION . '.' . PHP_MINOR_VERSION . '.' . PHP_RELEASE_VERSION,
            'laravel' => \Illuminate\Foundation\Application::VERSION,
            'twig' => \Twig\Environment::VERSION,
        ];
    }

}
