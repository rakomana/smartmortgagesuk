<?php

namespace App\Widgets;

use App\Contact;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Widgets\BaseDimmer;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class Contacts extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = Contact::count();
        $string = trans_choice('voyager::dimmer.post', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-bell',
            'title'  => "{$count} Enquiry",
            'text'   => __('You have '.$count.' lead in your database. Click on button below to view all posts.'),
            'button' => [
                'text' => 'View all Leads',
                'link' => route('voyager.contacts.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/02.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', Voyager::model('Post'));
    }
}
