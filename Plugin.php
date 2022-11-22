<?php namespace WebVPF\DashboardWidgets;

use Backend\Models\UserRole;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails(): array
    {
        return [
            'name'        => 'webvpf.dashboardwidgets::lang.plugin.name',
            'description' => 'webvpf.dashboardwidgets::lang.plugin.desc',
            'author'      => 'WebVPF',
            'icon'        => 'icon-gauge-high',
            'homepage'    => 'https://github.com/WebVPF/wn-dashboardwidgets-plugin',
        ];
    }

    public function registerPermissions(): array
    {
        return []; // Remove this line to activate

        return [
            'webvpf.dashboardwidgets.some_permission' => [
                'tab' => 'DashboardWidgets',
                'label' => 'Some permission',
                'roles' => [UserRole::CODE_DEVELOPER, UserRole::CODE_PUBLISHER],
            ],
        ];
    }

    public function registerReportWidgets(): array
    {
        return [
            \WebVPF\DashboardWidgets\ReportWidgets\SystemInfo::class => [
                'label'   => 'System Info',
                'context' => 'dashboard',
                // 'permissions' => [
                //     'webvpf.dashboardwidgets.widgets.systeminfo',
                // ],
            ],
            \WebVPF\DashboardWidgets\ReportWidgets\SystemCache::class => [
                'label'   => 'Cache',
                'context' => 'dashboard',
                // 'permissions' => [
                //     'webvpf.dashboardwidgets.widgets.systemcache',
                // ],
            ],
        ];
    }

}
