@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-center">
        <div class="card">
            <div class="card-body">
                <p>Email Verifikasi sudah terkirim. Silakan verifikasi sekarang.</p>
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit" class="btn btn-success" id="resendButton">Kirim ulang kembali</button>
                </form>
                <p id="countdown" style="display: none;"></p>
            </div>
        </div>
    </div>
    
    <script>
     
      const resendButton = document.getElementById('resendButton');
      const countdownElement = document.getElementById('countdown');
  
      function startCountdown(seconds) {
          countdownElement.style.display = 'block';
          resendButton.style.display = 'none';
  
          let remainingSeconds = seconds;
          countdownElement.textContent = `Resend in ${remainingSeconds} seconds`;
  
          const countdownInterval = setInterval(() => {
              remainingSeconds -= 1;
              countdownElement.textContent = `Resend in ${remainingSeconds} seconds`;
  
              if (remainingSeconds <= 0) {
                  clearInterval(countdownInterval);
                  countdownElement.style.display = 'none';
                  resendButton.style.display = 'block';
                  resendButton.removeAttribute('disabled'); // Re-enable the button
              }
          }, 1000);
      }
  
      // Add a click event listener to the button
      resendButton.addEventListener('click', function (e) {
          e.preventDefault();
  
          // Disable the button immediately
          resendButton.setAttribute('disabled', 'disabled');
  
          // Start a 2-minute (120-second) countdown timer
          startCountdown(120);
  
          // Send the verification email using an AJAX request
          fetch("{{ route('verification.send') }}", {
              method: 'POST',
              headers: {
                  'X-CSRF-TOKEN': "{{ csrf_token() }}"
              }
          })
              .then(response => response.json())
              .then(data => {
                  // Handle the response if needed
              })
              .catch(error => {
                  // Handle errors if the request fails
              });
      });
  </script>
  
  
@endsection
