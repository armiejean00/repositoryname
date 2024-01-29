


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
       <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}">
    <!-- My CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/homepage.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>ApexHubSpot</title>
</head>

<body>


    <!-- SIDEBAR -->
<section id="sidebar" class="hide">
    <a href="#" class="brand">
        <img src="{{asset('assets/img/logo.png')}}" alt="image" style="width:60px">

    </a>
    <ul class="side-menu top">
        <li>
            <a href="home">
                <i class='bx bxs-dashboard'></i>
                <span class="text">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="admin-booking">
                <i class='bx bxs-book-alt'></i>
                <span class="text">Booking</span>
            </a>
        </li>
        <li class="active">
            <a href="#">
                <i class='bx bxs-map'></i>
                <span class="text">Office Map</span>
            </a>
        </li>
        <li>
            <a href="{{route('use.index1')}}">
                <i class='bx bxs-group'></i>
                <span class="text">Manage Users</span>
            </a>
        </li>

        <li>
            <a href="{{route('desks.index')}}">
                <i class='bx bx-desktop'></i>
                <span class="text">Manage Desk</span>
            </a>
        </li>
         <li>
            <a href="profile">
                <i class='bx bx-user'></i>
                <span class="text">Profile</span>
            </a>
        </li>
       
    </ul>
    <ul class="side-menu" style="margin-top:150px">
       
       
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
           <h1>Office Map</h1>

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


 
   <script>
    <script>
    document.querySelector('#date_input').addEventListener('change', function() {
        var selectedDate = this.value;
        fetch('/update-data', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ date: selectedDate })
        })
        .then(function(response) {
            // Handle the response and update the relevant data on the page
        });
    });
</script>

    
   </script>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->


   <script src="{{asset('assets/js/homepage.js')}}"></script>
</body>

</html>

