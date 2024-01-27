


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/homepage.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>Homepage</title>
</head>

<body>


    <!-- SIDEBAR -->
<section id="sidebar" class="hide">
    <a href="#" class="brand">
        <img src="{{asset('assets/img/logo.png')}}" alt="image" style="width:60px">

    </a>
    <ul class="side-menu top">
        <li class="active">
            <a href="#">
                <i class='bx bxs-home'></i>
                <span class="text">Home</span>
            </a>
        </li>
        <li>
            <a href="booking">
                <i class='bx bxs-book-alt'></i>
                <span class="text">Booking</span>
            </a>
        </li>
       
       

      
    </ul>
    <ul class="side-menu" style="margin-top:300px">
       
       
        <li> 
            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="color:red">
                                       <i class='bx bxs-log-out-circle'> </i>Logout
                                    </a>
                                   

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
        </li>
    </ul>
</section>
    <!-- SIDEBAR -->



    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
            <p>ApexHubSpot</p>

            <form action="#">
                <div class="form-input">

                </div>
            </form>

           
          
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
           <p style="font-size:25px">Good Day! {{ Auth::user()->firstname }}, Book your Desk Now</p>
            <br>






            <form method="POST" action="{{ route('bookings.store') }}">
    @csrf
    <label for="date" style="margin-left:40px">Date:</label>
   <input type="date" name="date" id="date" required style="height:40px">

    
    <label for="desk_number" style="margin-left:40px">Desk Number:</label>
    <input type="number" name="desk_number" id="desk_number" required style="height:40px">
    
    <button type="submit" style="background-color:darkblue;cursor:pointer;color:white;font-size:20px;border-radius:5px;margin-left:200px;padding:10px 20px">Book</button>


</form>
<br>
 <div>
        @if(session()->has('success'))
        <div style="color:white;background-color:#7EE27C;width:250px;padding:10px;border-radius:20px">
            {{session('success')}}
        </div>

        @endif
    </div>
    <div>
        @if(session()->has('error'))
        <div style="color:white;background-color:#FF4848;width:250px;padding:10px;border-radius:20px">
            {{session('error')}}
        </div>

        @endif
    </div>
    <div>
        @if(session()->has('errors'))
        <div style="color:white;background-color:#FF4848;width:250px;padding:10px;border-radius:20px">
            {{session('errors')}}
        </div>

        @endif
    </div>

    <div>
        @if(session()->has('error0'))
        <div style="color:white;background-color:#FF4848;width:250px;padding:10px;border-radius:20px">
            {{session('error0')}}
        </div>

        @endif
    </div>










            <div class="table-data">
                
                <div class="order">
                    <div class="head">
                     
 
<div>

    <br>
<div style="display:flex">
<img src="{{ asset('assets/img/floor1.png') }}" alt="" style="height:380px"> 
   
    <img src="{{ asset('assets/img/floor2.png') }}" alt="" style="height:380px">
</div>
<div style="display:flex">
       
<img src="{{ asset('assets/img/floor3.png') }}" alt="" style="height:380px">
 <img src="{{ asset('assets/img/floor4.png') }}" alt="" style="height:380px">
</div>




</div>



                

                
               
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->


   <script src="{{asset('assets/js/homepage.js')}}"></script>
   <script>
    // Get the current date
    var today = new Date().toISOString().split('T')[0];

    // Set the minimum selectable date to the current date
    document.getElementById("date").min = today;

    // Calculate the next two days
    var nextDay = new Date();
    nextDay.setDate(nextDay.getDate() + 14);
    var nextTwoDays = nextDay.toISOString().split('T')[0];

    // Set the maximum selectable date to the next two days
    document.getElementById("date").max = nextTwoDays;
</script>

</body>

</html>

