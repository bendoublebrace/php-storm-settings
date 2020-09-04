<?php
#set ( $this = "$this" )
#set ( $DataProvider = "$DataProvider" )

#if (${NAMESPACE})

namespace ${NAMESPACE};

#end

use Commerce\Data\Providers;
use DoubleBrace\Engine\Data\Schema\BaseSchema;
use DoubleBrace\Engine\Data\Schema\Type;
use DoubleBrace\Engine\Data\Schema\FieldOptions;
use DoubleBrace\Engine\Data\Schema\SchemaInterface;

class ${NAME} extends BaseSchema implements SchemaInterface {
    public function __construct()
    {
        ${this}->properties = [];
    }

    protected static ${DataProvider};
    
    public static function DataProviderInstance()
    {
        if (!isset(static::${DataProvider})) {
            throw new \Exception('${NAME} does not set a Dataprovider yet');
        }
        return static::${DataProvider};
    }
}