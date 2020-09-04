<?php
#set ( $DataProvider = "$DataProvider" )

#if (${NAMESPACE})

namespace ${NAMESPACE};

#end

use Commerce\Data\Providers;
use DoubleBrace\Engine\Boosters\SchemaRouter;
use DoubleBrace\Engine\Server;

class ${NAME} implements Server\Interfaces\Endpoint, SchemaRouter\SchemaEndpointInterface {
    use Server\Traits\Endpoint\Base;
    use SchemaRouter\SchemaEndpointTrait;

    protected static ${DataProvider};
    
    public static function DataProviderInstance()
    {
        if (!isset(static::${DataProvider})) {
            throw new \Exception('${NAME} does not set a Dataprovider yet');
        }
        return static::${DataProvider};
    }
}