<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-12-20
 * Time: 19:35
 */


class msg{
    var $id;
    var $img1;
    var $img2;
    var $img3;
    var $userName;
    var $content;
    var $like;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getImg1()
    {
        return $this->img1;
    }

    /**
     * @param mixed $img1
     */
    public function setImg1($img1)
    {
        $this->img1 = $img1;
    }

    /**
     * @return mixed
     */
    public function getImg2()
    {
        return $this->img2;
    }

    /**
     * @param mixed $img2
     */
    public function setImg2($img2)
    {
        $this->img2 = $img2;
    }

    /**
     * @return mixed
     */
    public function getImg3()
    {
        return $this->img3;
    }

    /**
     * @param mixed $img3
     */
    public function setImg3($img3)
    {
        $this->img3 = $img3;
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
    public function getLike()
    {
        return $this->like;
    }

    /**
     * @param mixed $like
     */
    public function setLike($like)
    {
        $this->like = $like;
    }

}