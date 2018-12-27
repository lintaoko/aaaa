<?php
/**
 * Created by PhpStorm.
 * User: 12442
 * Date: 2018/12/27
 * Time: 18:07
 */

class comment
{
    var $fromId;
    var $content;
    var $userName;

    /**
     * @return mixed
     */
    public function getFromId()
    {
        return $this->fromId;
    }

    /**
     * @param mixed $fromId
     */
    public function setFromId($fromId)
    {
        $this->fromId = $fromId;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param mixed $userName
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

}