<?php

namespace App\Flows\UserOnboarding\Stages;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use CyrildeWit\LaravelFlow\Stage\AbstractStage;

class AccountInformation extends AbstractStage
{
    public function getSlug()
    {
        return 'account-information';
    }

    /**
     * Display the account information stage.
     *
     * @return \Illuminate\Http\Response
     */
    public function display(Request $request) {
        return view('user-onboarding.account-information', [
            'processsUrl' => route('user-onboarding', $this->getSlug()),
        ]);
    }

    /**
     *
     */
    public function process(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|max:255',
        ]);

        $this->guard()->login($user = $this->createUser($request->all()));

        return redirect()->route('user-onboarding', 'personal-information');

        // step processing logic
        // $user->setUserName('something');

        // $this->saveProgress();
    }

    public function isValid(Request $request)
    {
        return true;
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function createUser(array $data)
    {
        return User::create([
            // 'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
