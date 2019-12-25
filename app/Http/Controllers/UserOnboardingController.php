<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use CyrildeWit\LaravelFlow\Flow;
use CyrildeWit\LaravelFlow\Handler\HandlesFlow;
use CyrildeWit\LaravelFlow\Handler\FlowHandlerInterface;
use App\Flows\UserOnboarding\Stages\AcceptTerms;
use App\Flows\UserOnboarding\Stages\FinishProcess;
use App\Flows\UserOnboarding\Stages\AccountInformation;
use App\Flows\UserOnboarding\Stages\PersonalInformation;

class UserOnboardingController extends Controller implements FlowHandlerInterface
{
    use HandlesFlow;

    protected $flow;

    public function __construct()
    {
        $this->flow = new Flow();
        $this->flow->setStages([
            'account-information' => new AccountInformation(),
            'personal-information' => new PersonalInformation(),
            'accept-terms' => new AcceptTerms(),
            'finish-process' => new FinishProcess(),
        ]);
    }

    public function flow()
    {
        return $this->flow;
    }
}
