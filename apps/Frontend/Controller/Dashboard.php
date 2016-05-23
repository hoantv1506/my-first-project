<?php
namespace Frontend\Controller;

class Dashboard extends FrontendBase
{
    public function executeDefault()
    {
        $this->setView('Dashboard/default');
        return $this->renderComponent();
    }
}