<?php

namespace Kanboard\Plugin\Permalink;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        $this->template->hook->attach('template:task:dropdown', 'Permalink:task/permalink');
        $this->template->hook->attach('template:task:sidebar:actions', 'Permalink:task/permalink');
        $this->hook->on('template:layout:js', array('template' => 'plugins/Permalink/Assets/permalink.js'));
    }

    public function getCompatibleVersion()
    {
        return '1.2.21';
    }

    public function getPluginVersion()
    {
        return '0.1.0';
    }

    public function getPluginDescription()
    {
        return "Adds convenience function to copy project-independent links to tasks";
    }

    public function getPluginAuthor()
    {
        return 'Theobald Software GmbH';
    }
}
