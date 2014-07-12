<?php

namespace douane\intraBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class douaneintraBundle extends Bundle
{
	public function getParent()
    {
    return 'FOSUserBundle';
    }
}



