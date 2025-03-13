@extends('emails.layouts.app')

@section('content')
    <title>Verification Code</title>

    <p>Dear User,</p>

    <p>Your verification code is: <strong>{{ $verificationCode }}</strong></p>

    <p>Please use this verification code to proceed with your order.</p>

    <p>Thank you!</p>
@endsection
