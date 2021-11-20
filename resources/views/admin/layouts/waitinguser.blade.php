@extends('admin.index')
@section('main')


  <table class="table table-bordered border-success">


  <thead>

  
    <tr>
      <th scope="col">Id</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Approve</th>
      

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">101</th>
      
      <td>Md Sabbir</td>
      <td>Ahmmed</td>
      <td>mdsabbirahmmed87@gmail.com</td>
      <td>
        <button href="#" class="btn btn-success">Yes</button>
        <button href="#" class="btn btn-danger">No</button>
      </td>
      
    </tr>
    <tr>
      <th scope="row">102</th>
      <td>Md</td>
      <td>Rizwan</td>
      <td>rizwan@gmail.com</td>
      <td>
        <button href="#" class="btn btn-success">Yes</button>
        <button href="#" class="btn btn-danger">No</button>
      </td>
    </tr>

    <tr>
      <th scope="row">103</th>
      <td>Babar</td>
      <td>Ajom</td>
      <td>babar@gmail.com</td>
      <td>
        <button href="#" class="btn btn-success">Yes</button>
        <button href="#" class="btn btn-danger">No</button>
      </td>
    </tr>
    
  </tbody>
</table>



<button type="button" class="btn btn-primary">Go Back</button>

@endsection