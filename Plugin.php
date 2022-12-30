<?php

namespace Kanboard\Plugin\KanboardPermalink;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;

class Plugin extends Base
{
    public function initialize()
    {
        $this->template->hook->attach('template:task:dropdown:before-actions', 'KanboardPermalink:task/permalink');
        $this->template->hook->attach('template:task:sidebar:before-actions', 'KanboardPermalink:task/permalink');
        $this->hook->on('template:layout:js', array('template' => 'plugins/KanboardPermalink/Assets/js/permalink.js'));
    }

    public function onStartup()
    {
        Translator::load($this->languageModel->getCurrentLanguage(), __DIR__.'/Locale');
    }

    public function getPluginName()
    {
        // Plugin Name MUST be identical to namespace for Plugin Directory to detect updated versions
        return 'KanboardPermalink';
    }

    public function getPluginDescription()
    {
        return t('Adds a convenient link to copy the task url to the clipboard');
    }

    public function getPluginAuthor()
    {
        return 'Theobald Software GmbH, aljawaid';
    }

    public function getPluginVersion()
    {
        return '1.1.0';
    }

    public function getCompatibleVersion()
    {
        // Examples:
        // >=1.0.37
        // <1.0.37
        // <=1.0.37
        return '>=1.2.20';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/theobald-software/KanboardPermalink';
    }
}
