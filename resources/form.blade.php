@extends('index')
@section('form')
<form class="form-horizontal" action="{{Route('form')}}" method="POST">
    @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-8 col-form-label">Category</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="category" name="category" placeholder="Category">
                    </div>
                  </div>
                 
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Submit</button>
                  <button type="submit" class="btn btn-default float-right" name="submit">Cancel</button>
                </div>
                <!-- /.card-footer -->
              </form>
@endsection