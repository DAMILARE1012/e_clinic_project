<h6>Case Assigned</h6>

<p>This is to inform you that you have been assigned to a case</p>

<h5>Details</h5>
<ol>
    <li>Patient Email: {{ $complaint->user->email }}</li>
    <li>Patient First Name: {{ $complaint->user->firstname }}</li>
    <li>Patient Last Name: {{ $complaint->user->lastname }}</li>
</ol>

<a class="btn btn-primary" href="{{ route('login') }}">
    Click here to login
</a>