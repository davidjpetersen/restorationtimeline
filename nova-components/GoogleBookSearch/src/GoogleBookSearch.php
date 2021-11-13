<?php

namespace Restoration\GoogleBookSearch;

use Laravel\Nova\ResourceTool;

class GoogleBookSearch extends ResourceTool
{
    /**
     * Get the displayable name of the resource tool.
     *
     * @return string
     */
    public function name()
    {
        return 'Google Book Search';
    }

    /**
     * Get the component name for the resource tool.
     *
     * @return string
     */
    public function component()
    {
        return 'google-book-search';
    }
}
