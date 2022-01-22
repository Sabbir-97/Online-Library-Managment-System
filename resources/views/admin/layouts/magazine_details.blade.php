@extends('admin.index')


@section('main')

<br>
<form class="print_order">
        <input class="btn btn-success" type="button" onClick="PrintDiv();" value="Print">
    </form>
    <div id="divToPrint">

    <div style="margin-left:470px;">
            <h1>Magazine Details</h1>
    </div>

    <div style="margin-left:470px;">

    <p>
    <img src="{{url('/uploads/magazines/'.$magazine->img)}}" style="width:300px;height:200px" alt="">
    </p>
<p>Magazine Name: {{$magazine->magazine_name}}</p>
<p>Category: {{$magazine->category}}</p>
<p>Available: {{$magazine->available_magazine}}</p>
<p>Available: {{$magazine->description}}</p>


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