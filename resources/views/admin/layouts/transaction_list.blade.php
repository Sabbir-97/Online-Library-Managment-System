@extends('admin.index')
@section('main')

<h1 class="display-4">Transaction History</h1>

<form action="{{route('user.transaction')}}">
<div class="input-group rounded mt-3 mb-2">
  <div class="form-outline">
    <input type="search" id="form1" class="form-control" name="search" placeholder="Search" arial-label="Search" aria-describedby="search-addon" />
    <!-- <label class="form-label" for="form1">Search</label> -->
  </div>
  <button type="submit" class="btn btn-primary">
    <i class="fas fa-search"></i>
  </button>
</div>

</form>
<form class="print_order">
        <input class="btn btn-success" type="button" onClick="PrintDiv();" value="Print">
    </form>
    <div id="divToPrint">

<table class="table">
  <thead>
    <tr>
    <th scope="col">Id</th>
      <th scope="col">User Name</th>
      <th scope="col">User Email</th>
      <th scope="col">Payment Method</th>
      <th scope="col">Transaction Id</th>
      <!-- <th scope="col">Action</th> -->
    </tr>
  </thead>
  <tbody>
  @foreach($transaction as $key=>$data)
    <tr>
      <td>{{$key+1}}</td>
      <th scope="row">{{$data->user_name}}</th>
      <td>{{$data->email_address}}</td>
      <td>{{$data->payment_method}}</td>
      <td>{{$data->transaction_id}}</td>
      

      <!-- <td>
       <a button type="button" class="btn btn-success" href="#">Details</button>
       <a button type="button" class="btn btn-danger" href="#" >Delete</button>
    </td> -->

    </tr>
    @endforeach  
    
  </tbody>

 
   
   

</table>

@endsection()
<script language="javascript">
    function PrintDiv() {
        var divToPrint = document.getElementById('divToPrint');
        var popupWin = window.open('', '_blank', 'width=1100,height=700');
        popupWin.document.open();
        popupWin.document.write('<html><head><link href="http://127.0.0.1:8000/css/style.css" rel="stylesheet"></head><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
    }
</script>