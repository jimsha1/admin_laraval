@extends('index')
@section('product')
<div class="col-md-6">
<form action="{{Route('add_product')}}" method="post">
                  @csrf                
                  <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category</label>
                    <select name="category" id="">
                      @foreach($categorys as $category)
                      <option value="{{$category->category}}" name="">{{$category->category}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product_name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter product_name" name="pro_name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Price</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter price" name="price">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Exp.date</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter exp.date" name="date">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Quantity</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter quantity" name="quantity">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Stock</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter stock" name="stock">
                  </div>
                  
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </div>
              </form>
</div>
              @endsection