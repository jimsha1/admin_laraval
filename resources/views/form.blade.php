@extends('index')
@section('form')
<div class="col-md-6">
<form class="form-horizontal" action="{{Route('forms')}}" method="post">
    @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label" >Category</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="category" placeholder="Category" name="category">
                    </div>
                  </div>
                 
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info" name="submit">Submit</button>
                  <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div>
                <!-- /.card-footer -->
              </form>
</div>
@endsection