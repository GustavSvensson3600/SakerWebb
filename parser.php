<?php
class Parser
{
   public function __construct()
    {
    }

    public function htmlParse($string)
    {
        $strig =  htmlspecialchars ( string $string [, int $flags = ENT_COMPAT | ENT_HTML401 [, string $encoding = ini_get("utf8") [, bool $double_encode = true ]]] )
        return $strig;
    }
}
