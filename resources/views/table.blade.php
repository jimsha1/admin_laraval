@extends('index')
@section('table')
<div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>category</th>
                      <th>product</th>
                      <th>price</th>
                      <th>exp_date</th>
                      <th>quantity</th>
                      <th>stock</th>
                      <th>action</th>
                      <th>edit</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($products as $product)
                    <tr>
                        
                        <td>{{$product->id}}</td>
                      <td>{{$product->category}}</td>
                      <td>{{$product->pro_name}}</td>
                      <td>{{$product->price}} </td>
                      <td>{{$product->exp_date}} </td>
                      <td>{{$product->quantity}} </td>
                      <td>{{$product->stock}} </td>
                      <td><button class="btn btn-light"><a href="{{route('delete',encrypt($product->id))}}">delete</a></button></td>
                      <td><button class="btn btn-light"><a href="{{route('edit',encrypt($product->id))}}">edit</a></button></td>
                      

                     
</tr>
@endforeach
                    
                  </tbody>
                </table>
              </div>
              @endsection