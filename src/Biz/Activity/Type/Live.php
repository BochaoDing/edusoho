<?php

namespace Biz\Activity\Type;

use Biz\Activity\Config\Activity;

class Live extends Activity
{
    protected function registerListeners()
    {
        return array(
        );
    }

    public function create($fields)
    {
        return $this->getLiveActivityService()->createLiveActivity($fields);
    }

    public function update($id, &$fields, $activity)
    {
        return $this->getLiveActivityService()->updateLiveActivity($id, $fields, $activity);
    }

    public function get($targetId)
    {
        return $this->getLiveActivityService()->getLiveActivity($targetId);
    }

    public function delete($targetId)
    {
        return $this->getLiveActivityService()->deleteLiveActivity($targetId);
    }

    public function isFinished($activityId)
    {
        $result = $this->getActivityLearnLogService()->findMyLearnLogsByActivityIdAndEvent($activityId, 'live.start');
        return !empty($result);
    }

    protected function getLiveActivityService()
    {
        return $this->getBiz()->service('Activity:LiveActivityService');
    }

    protected function getActivityLearnLogService()
    {
        return $this->getBiz()->service("Activity:ActivityLearnLogService");
    }
}
