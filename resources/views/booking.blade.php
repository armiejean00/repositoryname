


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
                <i class='bx bxs-home'></i>
                <span class="text">Home</span>
            </a>
        </li>
        <li class="active">
            <a href="#">
                <i class='bx bxs-book-alt'></i>
                <span class="text">Booking</span>
            </a>
        </li>
         <li>
            <a href="user-profile">
                <i class='bx bxs-user'></i>
                <span class="text">Profile</span>
            </a>
        </li>
         <li>
            <a href="faqs">
                <i class='bx bxs-component'></i>
                <span class="text">FAQ's</span>
            </a>
        </li>
          <li>
            <a href="userguide">
                <i class='bx bxs-cog'></i>
                <span class="text">User Guide</span>
            </a>
        </li>
       
       

      
    </ul>
    <ul class="side-menu" style="margin-top:200px">
       
       
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
          
            
           
  <h1>My Booking</h1>

  <br>

   <div>
        @if(session()->has('success'))
        <div style="color:white;background-color:#7EE27C;width:250px;padding:10px;border-radius:20px">
            {{session('success')}}
        </div>

        @endif
    </div>
            <div class="table-data">
                <div class="order">
                    <div class="head">
                      
                      
                         
                    

                            <table>
        <tr>
           
            <th>Date</th>
            <th>Desk Number</th>
            <th>Status</th>
             <th>Action</th>
          
          
            
        </tr>

      
   @foreach ($bookings as $booking)

        <tr>
           
            <td>{{$booking->date}}</td>
            <td>Desk {{$booking->desk_number}}</td>
          
            <td style="color:{{$booking->status ? 'green' : 'red'}}">{{$booking->status ? 'Accepted' : 'Cancelled'}}</td>

 
    <td>
        <form method="post" action="{{route('booking.destroy',$booking->id)}}">
            @csrf
            @method('DELETE')
      
        <input type="submit" value="Cancel" style="background-color: #ef7364; color: #fff; padding: 5px 10px; border: none; border-radius: 3px; cursor: pointer;"/>
    </form>
    </td>
        
        </tr>
@endforeach

    </table>
                       
                    </div>
                    
                  
                </div>

            </div>
          
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->


   <script src="{{asset('assets/js/homepage.js')}}"></script>
</body>

</html>

