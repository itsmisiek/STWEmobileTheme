<?php

namespace STWEmobileTheme\Containers;

use Plenty\Plugin\Templates\Twig;

class STWEmobileTheme
{
    public function call(Twig $twig): string
    {
        return $twig->render('STWEmobileTheme::Homepage.Homepage');
    }
}
