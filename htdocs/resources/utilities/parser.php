<?php
class Parser
{
   public function __construct()
    {
    }

    public function htmlParse($string)
    {
        $strig =  htmlspecialchars($string);//htmlspecialchars ($string , ENT_COMPAT, true );
        return $strig;
    }
}
