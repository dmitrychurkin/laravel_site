<?php
namespace App\Http\ViewComposers;

use Illuminate\View\View;


class HomePageComposer
{
    const DIRECTORY = 'images/';
    const IMAGES_SOCIALS = ['facebook.png', 'flickr.png', 'google+.png', 'linkedin.png', 'twitter.png'];

    
    public function compose(View $view)
    {
        $view->with([
            'socials' => self::IMAGES_SOCIALS,
            'dir' => self::DIRECTORY
            ]);
    }
}
