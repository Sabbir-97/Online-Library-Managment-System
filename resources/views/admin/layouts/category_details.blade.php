@extends('admin.index')


@section('main')

<br>
<form class="print_order">
        <input class="btn btn-success" type="button" onClick="PrintDiv();" value="Print">
    </form>
    <div id="divToPrint">
        

    <h1>Categories Details</h1>

    <p>
    <img src="{{url('/uploads/categories/'.$categories->image)}}" style="width:300px;height:200px" alt="">
    </p>
<p>Category Title: {{$categories->category_title}}</p>
<p>Discription: {{$categories->discription}}</p>
<p>Available: {{$categories->available}}</p>
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