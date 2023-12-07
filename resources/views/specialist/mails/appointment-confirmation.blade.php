
    <p>Dear {{ $specialist->firstname }}</p>
    <p>Your patient {{ $patient->firstname }}, {{ $patient->lastname }} has confirmed your appointment. Please login to your dashboard at the time confirmed to have your consultation session.</p>

    <p>The Confirmation information is as followed:</p>

    <ul>
            <li>DATE: {{ $appointment->date->toFormattedDateString() }}</li>
            <li>START TIME: {{ $appointment->start_time->format('g:i A')  }}</li>
            <li>END TIME: {{ $appointment->finish_time->format('g:i A')  }}</li>
            
            <a class="btn btn-primary" href="https://vimonet.health/login">
                Click here to login
            </a>

            <hr>
            

    </ul>



    

