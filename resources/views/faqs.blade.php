


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
          <li class="active">
            <a href="#">
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
        
            <section>
            
                <div class="background-section">
            
                    <div class="faqs-section">
                        <h2>Frequently Asked Questions</h2>
            
                        <div class="faq-item" onclick="toggleAnswer(this)">
                            <h3>What is hotdesking and how does it work in our system?</h3>
                            <p>Hotdesking is a flexible office arrangement where employees do not have assigned desks, but instead
                                can choose from a
                                pool of available workstations each day. In our system, employees can book a desk through our online
                                platform or mobile
                                app</p>
                        </div>
            
                        <div class="faq-item" onclick="toggleAnswer(this)">
                            <h3>How do I reserve a hotdesk in our system?</h3>
                            <p>To reserve a hotdesk, employees can log into our system using their credentials and access the
                                hotdesking feature. They
                                can view the availability of desks for a specific date and time, and select a desk that suits their
                                requirements. Once
                                they have made a reservation, the desk will be reserved under their name for the designated time
                                slot.</p>
                        </div>
            
                        <div class="faq-item" onclick="toggleAnswer(this)">
                            <h3>Can I reserve a hotdesk in advance?</h3>
                            <p>Yes, our system allows employees to reserve hotdesks in advance. They can book a desk for a future
                                date and time,
                                ensuring they have a workspace available when they need it. However, it is important to note that
                                reservations are
                                subject to availability, so it is advisable to book in advance to secure a desired desk.</p>
                        </div>
            
                        <div class="faq-item" onclick="toggleAnswer(this)">
                            <h3>Can I cancel my hotdesk booking?</h3>
                            <p>Yes, you can usually cancel your booking through our website's booking management system. However,
                                cancellation and modification policies may vary, so it's advisable to check our website's terms and
                                conditions or
                                contact our customer support for assistance.</p>
                        </div>
            
            
                        <div class="faq-item" onclick="toggleAnswer(this)">
                            <h3>How long can I use a hotdesk?</h3>
                            <p>In our hotdesking system, employees can use a desk for the designated time slot they have reserved.
                                The time could be a
                                few hours, half a day, or a full day, depending on their preference and availability. If employees
                                need to extend their
                                usage beyond the reserved time, they can check for availability and make an additional reservation
                                if necessary.</p>
                        </div>
            
                        <div class="faq-item" onclick="toggleAnswer(this)">
                            <h3>Can I personalize my hotdesk?</h3>
                            <p>As hotdesking promotes flexibility and shared workspaces, personalization options may vary. However,
                                employees are
                                generally allowed to bring personal items such as laptops, documents, and small desk accessories to
                                their chosen desk
                                for the day. It is important to ensure that personal items are removed at the end of the day to keep
                                the desk clean and
                                ready for the next user.</p>
                        </div>
            
                        <div class="faq-item" onclick="toggleAnswer(this)">
                            <h3>Can I choose the same hotdesk every day?</h3>
                            <p>While our hotdesking system offers flexibility and the ability to choose from available desks, it
                                does not guarantee the
                                same desk every day. The availability of desks and the overall concept of hotdesking is based on a
                                first-come,
                                first-served basis. Employees can choose any available desk each day, depending on their needs and
                                preferences.</p>
                        </div>
            
                        <div class="faq-item" onclick="toggleAnswer(this)">
                            <h3>How can I find an available hotdesk quickly?</h3>
                            <p>Our hotdesking system provides real-time information on desk availability through our online platform
                                or mobile app.
                                Employees can easily view the available desks for a specific date and time, and select the one that
                                suits them best. This ensures a hassle-free and efficient process in finding a suitable
                                hotdesk quickly.</p>
                        </div>
                        <div class="faq-item" onclick="toggleAnswer(this)">
                            <h3>What if I encounter issues with my hotdesk reservation?</h3>
                            <p>If employees encounter any issues related to their hotdesk reservations, such as a desk being
                                occupied despite the
                                reservation or any technical difficulties with the system, they should contact the designated
                                support team or the office
                                administrator for assistance. They will help resolve any concerns and ensure a seamless experience
                                with the hotdesking
                                system.</p>
                        </div>
                        <div class="faq-item" onclick="toggleAnswer(this)">
                            <h3>Can I collaborate with colleagues while using a hotdesk?</h3>
                            <p>Absolutely! Our hotdesking system is designed to promote collaboration and flexibility within the
                                office space.
                                Employees can utilize common areas, meeting rooms, or designated collaboration spaces to work
                                together, have
                                discussions, or share ideas. The hotdesk setup allows for easy interaction and encourages a dynamic
                                work environment.</p>
                        </div>
            
                    </div>
            
                </div>
            
            </section>
    </section>

   

   <script src="{{asset('assets/js/faqs.js')}}"></script>


</body>

</html>

