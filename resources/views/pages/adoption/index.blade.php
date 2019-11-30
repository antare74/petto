{{-- @extends('layouts.layout')
@section('title')

<style>

#a-height{
height: 100%;;
}

</style>
@section('content')
<table class="table table-bordered table-striped">
        <tr>
            <th width="10%">Image</th>
            <th width="35%">First Name</th>
            <th width="35%">Last Name</th>
            <th width="30%">Action</th>
        </tr>
        @foreach($data as $row)
         <tr>
            <td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75" /></td>
            <td>{{ $row->title }}</td>
            <td>{{ $row->description }}</td>
            <td>{{ $row->image }}</td>
         </tr>
        @endforeach
       </table>
       {!! $data->links() !!}
@endsection --}}
