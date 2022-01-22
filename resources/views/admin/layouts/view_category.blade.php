@extends('admin.index')
@section('main')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-30">
                <!-- button -->

                <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <table class="table table-borderless table-data3">

                        <tbody>
                            <td>{{ $category->name }}</td>
                            
                            <td><a target="_blank" href="{{ url('/uploads/book/',$category->file) }}">View File</a></td>

                        </tbody>
                    </table>
                    <!-- END DATA TABLE-->
                </div>
            </div>
        </div>
    </div>

@endsection()