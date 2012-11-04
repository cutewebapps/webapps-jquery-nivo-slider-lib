<?php

class JQueryNivoSlider_HeadHelper extends App_ViewHelper_Abstract
{
    public function head()
    {
    	$this->headLink()->append(
    	    $this->staticpath() . 'jquery-nivo-slider/css/nivo-slider.css' );
        $this->headScript()->append(
            $this->staticpath() . 'jquery-nivo-slider/js/jquery.nivo.slider.pack.js', 'jquery' );
    }
}