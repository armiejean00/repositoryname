


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
       <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}">
    <!-- My CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/faqs.css')}}">
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
        <li>
            <a href="booking">
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
          <li class="active">
            <a href="#">
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
     <section>

            <div class="background-section">

                <div class="faqs-section">
                    <h2>User Guide</h2>

                    <div class="faq-item" onclick="toggleAnswer(this)">
                        <h3>Creating an Account:</h3>
                        <p>To access the hotdesk booking system, you need to create a user account. Follow these steps:<br>
                        a. Open the website and click on the "Get Started" button.<br>
                        <img src="{{asset('assets/img/getstarted.png')}}" alt="" style="height:200px"> <br>

                        b. Fill out the required information, such as your firstname,lastname, email address, and password.<br>

                        c. Click on the "Register" button to complete the registration process. <br>
                    
                     <img src="{{asset('assets/img/register.png')}}" alt="" style="height:200px"> <br></p>
                         

                    </div>

                    <div class="faq-item" onclick="toggleAnswer(this)">
                        <h3>Logging In:</h3>
                        <p>Once you have registered, follow these steps to log in:<br>
                        a. Visit the website's homepage click "Get Started".<br>
                        b. Click on the "Login" option.<br>
                        c. Enter your registered email address and password.<br>
                        d. Click on the "Login" button. <br>
                     <img src="{{asset('assets/img/login.png')}}" alt="" style="height:200px">
                    </p>
                        

                    </div>

                    <div class="faq-item" onclick="toggleAnswer(this)">
                        <h3>How to Book?:</h3>
                        <p>Booking a hotdesk, you can use the following steps:<br>
                        a. On the website's home, You can book an available desk.<br>
                        b. enter desk number. <br>

                        c. Specify the desired date.<br>
                        d. Then click "Book" <br>
 <img src="{{asset('assets/img/book.png')}}" alt="" style="height:200px"> <br>
  <img src="{{asset('assets/img/donebooking.png')}}" alt="" style="height:200px"> <br>

                        
                    
                    </p>



                        
                    </div>


                     <div class="faq-item" onclick="toggleAnswer(this)">
                        <h3>Where to find your Booking?:</h3>
                        <p>You can find your booking in by clicking the sidebar button "Booking":<br>
                        a. On the website's sidebar, find "Booking".<br>
                         <img src="{{asset('assets/img/mybooking.png')}}" alt="" style="height:200px"> <br>
                        b. Click this and you can see your bookings. You can also cancel your booking.<br>
 <img src="{{asset('assets/img/history.png')}}" alt="" style="height:200px"> <br>
                    


                    
                    
                    </p>



                        
                    </div>

                    
                </div>

            </div>

        </section>
    </section>











                

   

   <script src="{{asset('assets/js/faqs.js')}}"></script>


</body>

</html>

