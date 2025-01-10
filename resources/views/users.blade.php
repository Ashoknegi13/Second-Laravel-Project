<h1>User page</h1>

<table border="1px solid balck" cellpadding="10px" cellspacing="0px">
    <tr> <th> id</th>
        <th>Name</th>
        <th>Phone</th>
        <th>City</th>
        <th>Operation</th>
    </tr>
  
    @foreach ($user as $key => $value )
    <tr>
            <td>{{ $key }} </td>
            <td> {{ $value['name'] }} </td>
            <td> {{ $value['phone'] }} </td>
            <td>{{ $value['city'] }} </td>
            <td><a href="{{ route('view.user', $key) }}">show</a></td>
        </tr>
 @endforeach

</table>


{{-- 
 @foreach ($user as $key => $value )
        <h3>{{ $key }}  {{ $value['name'] }} | {{ $value['phone'] }} | {{ $value['city'] }} |</h3>
 @endforeach --}}