<?php $this->beginContent('application.modules_core.activity.views.activityLayoutMail', array('activity' => $activity, 'showSpace' => true)); ?>

<?php echo Yii::t('ActivityModule.views_activities_ActivitySpaceCreated', "%displayName% created the new space %spaceName%", array(
    '%displayName%' => '<strong>'.$user->displayName.'</strong>',
    '%spaceName%' => '<strong>'. Helpers::truncateText($workspace->name, 25).'</strong>'
)); ?>
<br/>

<?php $this->endContent(); ?>
