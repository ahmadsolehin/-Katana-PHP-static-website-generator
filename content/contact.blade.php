@extends('_includes.base')

@section('pageTitle', '- Contact')

@section('body')
<h1>Contact Us</h1>
<p>Contact us with the form below</p>
<form>
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="text" class="form-control">
  </div>
  <div class="form-group">
    <label>Message</label>
    <textarea class="form-control"></textarea>
  </div>
  <button type="button" class="btn btn-primary">Submit</button>
</form>
@stop
