<?php

namespace ScaffolderTheme;

use Illuminate\Support\Facades\File;

class MaterialThemeViews implements \Scaffolder\Themes\IScaffolderThemeViews
{
    const EXT = '.blade.php';

    private $viewsDirectory = __DIR__ . '/../../resources/views/';

    public function getCreatePath()
    {
        return realpath($this->viewsDirectory . 'create' . self::EXT);
    }

    public function getDashboardPath()
    {
        return realpath($this->viewsDirectory . 'dashboard' . self::EXT);
    }

    public function getEditPath()
    {
        return realpath($this->viewsDirectory . 'edit' . self::EXT);
    }

    public function getIndexPath()
    {
        return realpath($this->viewsDirectory . 'index' . self::EXT);
    }

    public function getWelcomePath()
    {
        return realpath($this->viewsDirectory . 'welcome' . self::EXT);
    }
}