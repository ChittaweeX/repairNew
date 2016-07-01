@extends('template')
@section('title')
XXXXX
@endsection
@section('content')
   {{  Session::get('alerttext'); }}
<form class="" action="{{ url("manage/testsave") }}" method="post">
  <div class="form-group">
    <label for="">NAME</label>
    <input type="text" class="form-control" name="test1" placeholder="">
    <p class="help-block">Help text here.</p>
  </div>
  <button type="submit" class="btn btn-default">
    OK
  </button>
</form>




@endsection
