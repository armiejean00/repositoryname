


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
            
           

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Calendar</h3>

                    </div>
                    
                  
                </div>

                <div class="todo">
                    <div class="head">
                        <h3>Available Desk</h3>


                    </div>
                    <p style="color: green;font-size: 12px;">available</p>
                    <p style="color: red;font-size: 12px;">not-available</p>
                    <ul class="todo-list">


                        <li class="completed">
                            <p>Office 1</p>

                            <p style="color: red;">1</p>
                            <p style="color: green;">2</p>
                            <p style="color: green;">3</p>
                            <p style="color: red;">4</p>
                        </li>
                        <li class="completed">
                            <p>Office 2</p>
                            <p style="color: red;">5</p>
                            <p style="color: green;">6</p>
                            <p style="color: green;">7</p>
                            <p style="color: red;">8</p>

                        </li>
                        <li class="completed">
                            <p>Office 3</p>
                            <p style="color: red;">9</p>
                            <p style="color: red;">10</p>
                            <p style="color: green;">11</p>
                            <p style="color: red;">12</p>

                        </li>
                        <li class="completed">
                            <p>Office 4</p>
                            <p style="color: red;">13</p>
                            <p style="color: green;">14</p>
                            <p style="color: green;">15</p>
                            <p style="color: red;">16</p>
                            <p style="color: green;">17</p>
                            <p style="color: red;">18</p>

                        </li>
                        <li class="completed">
                            <p>Office 5</p>
                            <p style="color: green;">19</p>
                            <p style="color: green;">20</p>
                            <p style="color: green;">21</p>
                            <p style="color: red;">22</p>
                            <p style="color: green;">23</p>
                            <p style="color: red;">24</p>

                        </li>
                        <li class="completed">
                            <p>Office 6</p>
                            <p style="color: green;">25</p>
                            <p style="color: green;">26</p>
                            <p style="color: green;">27</p>
                            <p style="color: red;">28</p>

                        </li>
                    </ul>
                </div>
            </div>
          
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->


   <script src="{{asset('assets/js/homepage.js')}}"></script>
</body>

</html>

