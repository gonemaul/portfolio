@extends('base.admin')
@section('title', 'OTP')

@section('content')
    <div class="wrapper_otp">
        <div class="container_otp">
            <h1>OTP Verification</h1>
            <p>Enter the 6-digit code sent to your email.</p>
            <div class="otp-inputs">
                <input type="text" maxlength="1" oninput="moveNext(this, 0)" id="otp1" autofocus>
                <input type="text" maxlength="1" oninput="moveNext(this, 1)" id="otp2">
                <input type="text" maxlength="1" oninput="moveNext(this, 2)" id="otp3">
                <input type="text" maxlength="1" oninput="moveNext(this, 3)" id="otp4">
                <input type="text" maxlength="1" oninput="moveNext(this, 4)" id="otp5">
                <input type="text" maxlength="1" oninput="moveNext(this, 5)" id="otp6">
            </div>
            <button class="btn-submit" onclick="submitOTP()">Verify</button>
        </div>
    </div>
@endsection
@push('script')
    <script>
        function moveNext(input, index) {
            const inputs = document.querySelectorAll('.otp-inputs input');
            if (input.value.length === 1 && index < inputs.length - 1) {
                inputs[index + 1].focus();
            } else if (input.value.length === 0 && index > 0) {
                inputs[index - 1].focus();
            }
        }

        // Function to submit OTP
        function submitOTP() {
            const inputs = document.querySelectorAll('.otp-inputs input');
            let otp = '';
            inputs.forEach(input => {
                otp += input.value;
            });
            if (otp.length === 6) {
                alert('OTP Submitted: ' + otp);
                // You can replace the alert with your form submission logic
            } else {
                alert('Please fill in all 6 digits.');
            }
        }
    </script>
@endpush
