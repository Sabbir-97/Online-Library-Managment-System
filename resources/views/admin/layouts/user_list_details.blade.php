@extends('admin.index')


@section('main')

<br>
<form class="print_order">
        <input class="btn btn-success" type="button" onClick="PrintDiv();" value="Print">
    </form>
    <div id="divToPrint">

    <div style="margin-left:470px;">
            <h1>User Details</h1>
    </div>

    <div style="margin-left:470px;">
    <td> <img src="{{asset('/uploads/users/' .$allUsers->image)}}" style="width:300px;height:200px" alt=""></td>

        <p>User Name: {{$allUsers->user_name}}</p>
         <p>First Name: {{$allUsers->first_name}}</p>
         <p>Last Name: {{$allUsers->last_name}}</p>
         <p>Contact No: {{$allUsers->contact_no}}</p>
         <p>Email Address: {{$allUsers->email_address}}</p>
         <p>Date of Birth: {{$allUsers->date_of_birth}}</p>
         <p>Gender: {{$allUsers->gender}}</p>
         <p>Religion: {{$allUsers->religion}}</p>
         <p>Payment Method: {{$allUsers->payment_method}}</p>
         <p>Transaction Id: {{$allUsers->transaction_id}}</p>
         <p>Role: {{$allUsers->role}}</p>


    </div>

@endsection

<script language="javascript">
    function PrintDiv() {
        var divToPrint = document.getElementById('divToPrint');
        var popupWin = window.open('', '_blank', 'width=1100,height=700');
        popupWin.document.open();
        popupWin.document.write('<html><head><link href="http://127.0.0.1:8000/css/style.css" rel="stylesheet"></head><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
    }
</script>