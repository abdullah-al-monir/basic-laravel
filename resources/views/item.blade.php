@if ($id)
    <h3>This is Items page and the value is {{ $id }}</h3>
@else
    <h2>This is item page</h2>
@endif

@if ($details)
    <p>Details: {{ $details }}</p>
@endif
