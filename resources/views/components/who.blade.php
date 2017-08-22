
@if (Auth::guard('web')->check())
    <p class="text-success">
        You are Logged In as a <strong>USER</strong>
    </p>
@else
    <p class="text-danger">
        You are Logged Out as a <strong>USER</strong>
    </p>
@endif

@if (Auth::guard('company')->check())
    <p class="text-success">
        You are Logged In as a <strong>COMPANY</strong>
    </p>
@else
    <p class="text-danger">
        You are Logged Out as a <strong>COMPANY</strong>
    </p>
@endif