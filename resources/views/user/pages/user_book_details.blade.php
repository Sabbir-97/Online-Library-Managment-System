<form class="print_order">
        <input class="btn btn-success" type="button" onClick="PrintDiv();" value="Print">
    </form>
    <div id="divToPrint">

<br>
    <div style="margin-left:470px;">
            <h1>Book Details</h1>
    </div>

    <p>
    <img src="{{asset('/images/book/' .$allBook->image_path)}}" style="margin-left:470px;width:300px;height:200px" alt="">

    </p>



    <div style="margin-left:470px;">
        <p>Book Title: {{$allBook->book_title}}</p>
        <p>Category: {{$allBook->category}}</p>
        <p>Available: {{$allBook->available_books}}</p>
    </div>

    <script language="javascript">
    function PrintDiv() {
        var divToPrint = document.getElementById('divToPrint');
        var popupWin = window.open('', '_blank', 'width=1100,height=700');
        popupWin.document.open();
        popupWin.document.write('<html><head><link href="http://127.0.0.1:8000/css/style.css" rel="stylesheet"></head><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
    }
</script>
