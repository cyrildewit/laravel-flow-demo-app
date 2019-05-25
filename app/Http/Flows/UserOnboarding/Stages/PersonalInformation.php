<?php

namespace App\Flows\UserOnboarding\Stages;

use Illuminate\Http\Request;
use CyrildeWit\LaravelFlow\Stage\AbstractStage;

class PersonalInformation extends AbstractStage
{
    public function getSlug()
    {
        return 'personal-information';
    }

    /**
     * Display the account information stage.
     *
     * @return \Illuminate\Http\Response
     */
    public function display(Request $request) {
        return view('user-onboarding.personal-information');
    }

    /**
     *
     */
    public function process(Request $request)
    {
        dd($request);
        // step processing logic
        // $user->setUserName('something');

        // $this->saveProgress();
    }

    public function isValid(Request $request)
    {
        return true;
    }
}
