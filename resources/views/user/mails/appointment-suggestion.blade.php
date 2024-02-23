


    <p>Dear {{ $patient->firstname }}</p>
    <p>You have the following time slot suggestion. login to your dashboard to confirm a time slot for your consultation with {{ $specialist->firstname }}.</p>

    <p>The time slots are as followed:</p>

    <ul>
        @foreach ($appointments as $key  => $appointment)
            <li>DATE 1: {{ $appointment->date->toFormattedDateString() }}</li>
            <li>START TIME: {{ $appointment->start_time->format('g:i A')  }}</li>
            <li>END TIME: {{ $appointment->finish_time->format('g:i A')  }}</li>

            <a class="btn btn-primary" href="https://confirm-appointment/{{ $appointment->id }}">
                Confirm Appointment
            </a>

            <hr>

        @endforeach

    </ul>





