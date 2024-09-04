<?php

namespace App\Enums;

enum CategoryTypeEnum: string
{
    case PROPERTIES = 'property';
    case VEHICLES = 'vehicles';
    case CLASSIFIEDS = 'classifieds';
    case MOBILE_TABLET = 'mobile_tablet';
    case SERVICES = 'services';

    public function label()
    {
        return $this->getlabel($this);
    }

    public function getlabel(self $value)
    {
        return match ($value) {
            self::PROPERTIES => 'property',
            self::VEHICLES => 'vehicles',
            self::CLASSIFIEDS => 'classifieds',
            self::MOBILE_TABLET => 'mobile_tablet',
            self::SERVICES => 'services'
        };
    }
}
