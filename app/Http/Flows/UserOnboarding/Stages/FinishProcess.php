<?php

namespace App\Flows\UserOnboarding\Stages;

use Illuminate\Http\Request;
use CyrildeWit\LaravelFlow\Stage\AbstractStage;

class FinishProcess extends AbstractStage
{
    public function getSlug()
    {
        return 'finishing';
    }

    /**
     * Display the finish process stage.
     *
     * @return \Illuminate\Http\Response
     */
    public function display(Request $request) {
        return view('user-onboarding.finish-process');
    }

    /**
     *
     */
    public function process(Request $request)
    {
        //
    }

    public function isValid(Request $request)
    {
        return true;
    }
}
