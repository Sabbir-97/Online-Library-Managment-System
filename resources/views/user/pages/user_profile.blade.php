
<br>
<br>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/static/core/img/favicon.png" type="image/gif/png" sizes="16x16">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        .row a button:hover {
            border: none;
        }
    </style>

</head>

<body>


<hr>
<div class="container bootstrap snippet">
    <div class="row" style="padding-bottom: 20px;">
        <div>
            <!-- <a href="{% url 'index' %}" style="text-decoration: none; color: white;">
                <button type="button" class="btn btn-success" style="position: absolute; font-weight: bold; right: 10%; background-color: #7fad39;">
                Go Back to Home</button>
            </a> -->
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3"><!--left col-->


            <!-- <div class="text-center">
                <img src="#" class="avatar img-circle img-thumbnail"
                     alt="avatar">
                <h4></h4>
            </div> -->

            <!-- <div class="panel panel-default">
                <div class="panel-heading" ><h4>Email: </h4><i class="fa fa-link fa-1x"></i></div>
                <div class="panel-body"><h5></h5></div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Activity: </h4><i class="fa fa-link fa-1x"></i></div>
                <div class="panel-body"><a href="{% url 'order_history' %}" style="text-decoration: none;"><h5>View Orders</h5></a></div>
            </div> -->

        </div><!--/col-3-->
        <div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">User Profile</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <hr>

                    <form class="form" action="#" method="post" id="registrationForm">
                        <!-- csrf -->
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="user_name"><h4>User Name</h4></label>
                                <input value="{{auth()->user()->user_name}} " type="text" class="form-control" name="user_name"
                                       id="user_name" placeholder="user_name" title="enter your user_name if any.">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="first_name"><h4>First Name</h4></label>
                                <input value="{{auth()->user()->first_name}} " type="text" class="form-control" name="first_name"
                                       id="first_name" placeholder="first_name" title="enter your first_name if any.">
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="last_name"><h4>Last Name</h4></label>
                                <input value="{{auth()->user()->last_name}} " type="text" class="form-control" name="last_name"
                                       id="last_name" placeholder="last_name" title="enter your last_name if any.">
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="contact_no"><h4>Contact No</h4></label>
                                <input value="{{auth()->user()->contact_no}} " type="text" class="form-control" name="contact_no"
                                       id="contact_no" placeholder="contact_no" title="enter your contact_no if any.">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="email_address"><h4>Email Address</h4></label>
                                <input value="{{auth()->user()->email_address}}" type="text" class="form-control" name="email_address"
                                       id="email_address" placeholder="email_address" title="enter your last email_address if any.">
                            </div>
                        </div>

                        

                        

                        

                        

                        

                        

                        <div class="form-group">
                            <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success" type="submit"><i
                                        class="glyphicon glyphicon-ok-sign"></i> Update
                                </button>
                                <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i>
                                    Reset
                                </button>
                            </div>
                        </div>
                    </form>

                    <hr>

                </div>

            </div><!--/tab-pane-->
        </div><!--/tab-content-->

    </div><!--/col-9-->
</div><!--/row-->


<!-- <a href="" style="text-decoration: none; text-align: center;"
   title="Green Agro"><h3>Login to the site first</h3></a> -->




</body>
</html>






















