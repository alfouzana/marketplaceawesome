<?php

namespace App\Http\Controllers\Auth;
use App\User;
use DateTime;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Auth\Access\AuthorizationException;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }

    public function show(Request $request)
    {
        // return Auth::user();
        // return $request->user();
        if ($request->user()->hasVerifiedEmail()) {
            Toastr::success('You are verified! you can login now!');
            return redirect('/');
        }else {
            Toastr::success('please check your email for a varification link');
            return view('frontend.email.veriry_mail');
        }
       /*  return $request->user()->hasVerifiedEmail()
                        ? redirect($this->redirectPath())
                        : view('auth.verify'); */
    }

    function verify(Request $request){
        if ($request->route('id') != $request->user()->getKey()) {
            throw new AuthorizationException;
        }

        if ($request->user()->hasVerifiedEmail()) {
            return redirect($this->redirectPath());
        }

        if ($request->user()->markEmailAsVerified()) {
            $user=$request->user();
            $date = new DateTime();
            $user->update([
                'status' => 1,
                'email_verified_at' => $date->getTimestamp()
            ]);
            // return $user;
            auth()->logout();
           // event(new Verified($request->user()));
        }
        Toastr::success('You are verified! you can login now!');
        return redirect('login');
        // return redirect($this->redirectPath())->with('verified', true);
    }
 

 
    
}
