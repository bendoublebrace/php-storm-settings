<?php
#set ( $S = "\" )
#if (${NAMESPACE})

namespace ${NAMESPACE};

#end

use DoubleBrace\Engine\Data\Providers\ModelDataProvider;

class ${NAME} extends ModelDataProvider
{
    protected function getModelInstance()
    {
        return new ${S}${Model}();
    }
}