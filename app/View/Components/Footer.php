<?php

namespace App\View\Components;

use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
{
    public function __construct()
    {
        //
    }

    public function render(): View|Closure|string
    {
        $date = Carbon::now();
        $day = $date->format('l');
        $day = ucfirst($day);

        return view('components.footer', compact('day'));
    }
}
