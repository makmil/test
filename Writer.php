<?php

namespace makmil\test;
/**
 * Optimizer removes echo before special functions call and injects function name as an argument for the view helper
 * calls.
 *
 * @author Andrey Grachov <andrey.grachov@gmail.com>
 * @author Alexander Makarov <sam@rmcreative.ru>
 */
class Writer
{
    /**
     * @inheritdoc
     */
    public function hello()
    {
        echo "Hello\n";
    }
}
