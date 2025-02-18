<?php

namespace App\Http\Controllers;

use App\Mail\SendOtp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class VerificationController extends Controller
{
    public function show()
    {
        return view('auth.verify');
    }

    public function verifyOtp(Request $request)
    {
        $otp = $request->otp;
        $user = Auth::user();

        // Assuming the OTP is stored in the user's database record
        if ($otp == $user->otp) {
            // Mark the user as verified
            $user->email_verified_at = now();
            $user->save();

            return redirect()->route('dashboard')->with('success', 'Akun Anda telah diverifikasi.');
        } else {
            return redirect()->back()->with('error', 'OTP tidak valid. Silakan coba lagi.');
        }
    }

    public function resend()
    {
        $user = Auth::user();

        // Generate a new OTP
        $otp = rand(100000, 999999);

        // Update or create the OTP in the user's database record
        $user->otp = $otp;
        $user->save();

        // Send the OTP to the user's email
        Mail::to($user->email)->send(new SendOtp($user, $otp));

        return redirect()->route('dashboard')->with('success', 'Kode OTP baru telah dikirim ke alamat email Anda.');
    }
}
