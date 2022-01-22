@extends('admin.index')
@section('main')

<h1 class="display-4">User Feedback</h1>

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
      <th scope="col">User Phone No</th>
      <th scope="col">User Feedback</th>
      <!-- <th scope="col">Action</th> -->
    </tr>
  </thead>
  <tbody>
  @foreach($feedback as $key=>$data)
    <tr>
      <td>{{$key+1}}</td>
      <th scope="row">{{$data->user_name}}</th>
      <td>{{$data->user_email}}</td>
      <td>{{$data->user_phone_no}}</td>
      <td>{{$data->user_feedback}}</td>

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