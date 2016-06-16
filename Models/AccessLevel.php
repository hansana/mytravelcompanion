<?php

class Access_Level
{
    private $level_id;
    private $user_level;

    /**
     * Access_Level constructor.
     * @param $level_id
     * @param $user_level
     */
    public function __construct($level_id, $user_level)
    {
        $this->level_id = $level_id;
        $this->user_level = $user_level;
    }

    /**
     * @return mixed
     */
    public function getLevelId()
    {
        return $this->level_id;
    }

    /**
     * @param mixed $level_id
     */
    public function setLevelId($level_id)
    {
        $this->level_id = $level_id;
    }

    /**
     * @return mixed
     */
    public function getUserLevel()
    {
        return $this->user_level;
    }

    /**
     * @param mixed $user_level
     */
    public function setUserLevel($user_level)
    {
        $this->user_level = $user_level;
    }


}