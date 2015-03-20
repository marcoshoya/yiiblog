<?php

Yii::import('zii.widgets.CPortlet');

/**
 * Yii blog app
 * 
 * @see http://www.yiiframework.com/doc/blog/1.1/en/portlet.comments
 */
class RecentComments extends CPortlet
{

    public $title = 'Recent Comments';

    public $maxComments = 10;

    public function getRecentComments()
    {
        return Comment::model()->findRecentComments($this->maxComments);
    }

    protected function renderContent()
    {
        $this->render('recentComments');
    }
}