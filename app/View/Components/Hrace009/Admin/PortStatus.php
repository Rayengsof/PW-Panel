<?php

namespace App\View\Components\Hrace009\Admin;

use hrace009\PerfectWorldAPI\API;
use Illuminate\View\Component;

class PortStatus extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.hrace009.admin.port-status', [
            'api' => new API(),
        ]);
    }
}
