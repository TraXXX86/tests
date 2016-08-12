<?php

/**
 * Created by PhpStorm.
 * User: mjaouen
 * Date: 12/08/2016
 * Time: 10:44
 */
class AlertMessage
{
    private $style;
    private $message;

    const STYLE_SUCCESS = "success";
    const STYLE_ERROR = "danger";

    /**
     * AlertMessage constructor.
     * @param $style
     * @param $message
     */
    public function __construct($style, $message)
    {
        $this->style = $style;
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return bool
     */
    public function isComplete()
    {
        return !$this->message == '' && !$this->style == '';
    }

    /**
     * @return string
     */
    function __toString()
    {
        return $this->style . " : " . $this->message;
    }

}