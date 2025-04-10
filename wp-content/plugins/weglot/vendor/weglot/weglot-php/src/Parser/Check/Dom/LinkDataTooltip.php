<?php

namespace Weglot\Parser\Check\Dom;

use Weglot\Client\Api\Enum\WordType;

class LinkDataTooltip extends AbstractDomChecker
{
    const DOM = 'a';

    const PROPERTY = 'data-tooltip';

    const WORD_TYPE = WordType::TEXT;
}
