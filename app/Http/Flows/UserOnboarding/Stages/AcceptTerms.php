<?php

namespace App\Flows\UserOnboarding\Stages;

use Illuminate\Http\Request;
use CyrildeWit\LaravelFlow\Stage\AbstractStage;

class AcceptTerms extends AbstractStage
{
    public function getSlug()
    {
        return 'terms';
    }

    /**
     * Display the account information stage.
     *
     * @return \Illuminate\Http\Response
     */
    public function display(Request $request) {
        return view('user-onboarding.accept-terms');
    }

    public function process(Request $request)
    {
        //
    }

    public function isValid(Request $request)
    {
        return true;
    }
}
