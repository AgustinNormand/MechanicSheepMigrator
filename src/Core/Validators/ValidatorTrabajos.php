<?php

namespace API\Core\Validators;

use API\Core\Config;

class ValidatorTrabajos
{
    public static function isValid($record)
    {
        $onlyHistoricals = (Config::getInstance()->get("ONLY_HISTORICAL_RECORDS") == "true");

        if(!$onlyHistoricals)
            $result = true;
        else
        {
            $result = false;
            $columnName = "serest";
            $result = ($record->$columnName == 'T');
        }
        return $result;
    }
}