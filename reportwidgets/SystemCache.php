<?php namespace WebVPF\DashboardWidgets\ReportWidgets;

use Artisan;
use Backend\Classes\ReportWidgetBase;
use Exception;
use Flash;
use Lang;

class SystemCache extends ReportWidgetBase
{
    protected $defaultAlias = 'SystemCacheReportWidget';

    public function defineProperties(): array
    {
        return [
            'title' => [
                'title'             => 'backend::lang.dashboard.widget_title_label',
                'default'           => Lang::get('webvpf.dashboardwidgets::lang.cacheinfo.prop.default_widget_title'),
                'type'              => 'string',
                'validationPattern' => '^.+$',
                'validationMessage' => 'backend::lang.dashboard.widget_title_error',
            ],
            'diameter' => [
                'title'             => 'webvpf.dashboardwidgets::lang.cacheinfo.prop.diameter',
                'description'       => 'webvpf.dashboardwidgets::lang.cacheinfo.prop.diameter_desc',
                'default'           => '200',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'webvpf.dashboardwidgets::lang.cacheinfo.prop.invalid_diameter',
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

        return $this->makePartial('systemcache');
    }

    /**
     * Prepares the report widget view data
     */
    public function prepareVars()
    {
        $this->vars['size'] = $this->getSizeCache();
        $this->vars['diameter'] = $this->property('diameter');
    }

    public function onClear()
    {
        Artisan::call('cache:clear');

        Flash::success(Lang::get('webvpf.dashboardwidgets::lang.cacheinfo.flash_success'));

        return ['partial' => $this->makePartial('systemcache', [
            'size' => $this->getSizeCache(),
            'diameter' => $this->property('diameter'),
        ])];
    }

    private function getDirectorySize($directory)
    {
        if (!file_exists($directory) || count(scandir($directory)) <= 2) {
            return 0;
        }

        $size = 0;
        foreach (new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($directory)) as $file) {
            $size += $file->getSize();
        }
        return $size;
    }

    private function formatSize($size)
    {
        $units = [
            Lang::get('webvpf.dashboardwidgets::lang.cacheinfo.units.b'),
            Lang::get('webvpf.dashboardwidgets::lang.cacheinfo.units.kb'),
            Lang::get('webvpf.dashboardwidgets::lang.cacheinfo.units.mb'),
            Lang::get('webvpf.dashboardwidgets::lang.cacheinfo.units.gb'),
            Lang::get('webvpf.dashboardwidgets::lang.cacheinfo.units.tb'),
            Lang::get('webvpf.dashboardwidgets::lang.cacheinfo.units.pb'),
        ];

        $i = 0;
        while (floor($size / 1024) > 0) {
            ++$i;
            $size /= 1024;
        }

        return round($size, 2) . ' ' . $units[$i];
    }

    private function getSizeCache()
    {
        $size = [
            'cms' => $this->getDirectorySize(storage_path() . '/cms/cache'),
            'combiner' => $this->getDirectorySize(storage_path() . '/cms/combiner'),
            'twig' => $this->getDirectorySize(storage_path() . '/cms/twig'),
            'framework' => $this->getDirectorySize(storage_path() . '/framework/cache'),
        ];

        $units = [
            'cms' => $this->formatSize($size['cms']),
            'combiner' => $this->formatSize($size['combiner']),
            'twig' => $this->formatSize($size['twig']),
            'framework' => $this->formatSize($size['framework']),
            'all_cache' => $this->formatSize(array_reduce($size, function($acc, $item) {
                return $acc + $item;
            })),
        ];

        return $units;
    }
}
