<?php

namespace App\Enums;

enum CategoryTypeEnum: string
{
    case PROPERTIES = 'properties';
    case HEALTH_CARE = 'health_care';
    case EDUCATION = 'education';
    case HOSPITALITY = 'hospitality';
    case CONSTRUCTION = 'construction';
    case JOBS_VACANCY = 'jobs_vacancy';
    case ORGANIZATIONS = 'organizations';
    case SHOW_ROOM = 'show_room';
    case OTHER_BUSINESS = 'other_business';

    public function label()
    {
        return $this->getlabel($this);
    }

    public function getlabel(self $value)
    {
        return match ($value) {
            self::PROPERTIES => 'properties',
            self::HEALTH_CARE => 'health_care',
            self::EDUCATION => 'education',
            self::HOSPITALITY => 'hospitality',
            self::CONSTRUCTION => 'construction',
            self::JOBS_VACANCY => 'jobs_vacancy',
            self::ORGANIZATIONS => 'organizations',
            self::SHOW_ROOM => 'show_room',
            self::OTHER_BUSINESS => 'other_business',
        };
    }
}
