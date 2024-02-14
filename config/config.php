<?php

/*
 * You can place your custom package configuration in here.
 */
return [

    /*
    * The default view to use when rendering the calendar.
    * Change these to your own views if you want to use your own.
    */
    'views' => [
        'calendar' => 'livewire-calendar::calendar',
        'day' => 'livewire-calendar::day',
        'day-of-week' => 'livewire-calendar::day-of-week',
        'event' => 'livewire-calendar::event',
    ],
];
