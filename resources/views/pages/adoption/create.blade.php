@extends('layouts.layout')
@section('title')

<style>

#a-height{
height: 100%;;
}

</style>
@section('content')
  <div id="a-height" class="container my-5">
    @if($errors->any())
<div class="alert alert-danger">
 <ul>
  @foreach($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
 </ul>
</div>
@endif

<form id="form1" runat="server" method="post" action="/adoption/create" enctype="multipart/form-data">

 @csrf
 <div class="form-group">
  <label class="col-md-4">Pet Name</label>
  <div class="col-md-8">
   <input type="text" name="title" class="form-control input-lg" />
  </div>
 </div>
 <div class="form-group">
  <label class="col-md-4">Description </label>
  <div class="col-md-8">
   <input type="text" name="description" class="form-control input-lg" />
  </div>
 </div>
 <div class="form-group">
    <label class="col-md-4">Image</label>
    <div class="image mb-2 ml-3">
        <img id="blah" width="200px" />
    </div>
    <div class="col-md-8">
        <input type="file" name="image" onchange="readURL(this);" />
    </div>
 </div>
 <br /><br /><br />
    <div class="form-group text-center">
       <input type="submit" name="submit" class="btn btn-primary input-lg" value="submit" />
    </div>

</form>
  </div>
@endsection
<script>
function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
