@extends('layouts.app')
@section('content')
{{-- @extends('layouts.topbar')
@section('content') --}}
  {{--$company->projects as $project--}}
  <div class="col-md-9 col-lg-9 col-sm-9 pull-left">
    <div class="row  col-lg-12 col-sm-12 col-md-12" style="background: white; margin: 10px;">
      <form method="post" action="{{route('companies.update',[$company->id])}}">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="put">
        <div class="form-group">
          <label for="company-name">Name<span class="required">*</span></label>
          <input  placeholder="Enter Name"
                  id="company-name"
                  required
                  name="name"
                  spellcheck="false"
                  class="form-control"
                  value="{{ $company->name}}" 
                  type="text" 
                  style="width: 90%" />  
        </div>
        <div class="form-group">
          <label for="company-content">Description</label>
          <textarea   placeholder="Enter Description"
                      style="resize: vertical;" 
                      id="company-content"
                      name="description"
                      rows="5" 
                      spellcheck="false"
                      class="form-control autosize-target text-left">
                      {{ $company->description}} 
                      </textarea>  
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="Submit">
        </div>
        
      </form>
    
    </div>
  </div>
  <div class="col-sm-3 col-md-3 col-lg-3 pull-right">
    <div class="sidebar-module">
      <h4>Actions</h4>
      <ol class="list-unstyled">
        <li><a href="/companies/{{$company->id}}">View Company</a></li>
        <li><a href="/companies/{{$company->id}}/edit">All Company</a></li>
      </ol>
    </div>
    <div class="sidebar-module">
      <h4>Members</h4>
      <ol class="list-unstyled">
        <li><a href="#">March 2014</a></li>
      </ol>
    </div>
  </div>
@endsection      