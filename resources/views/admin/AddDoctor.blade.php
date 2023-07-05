<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Admin Dashboard | Korsat X Parmaga</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="{{asset('Admin/css/style.css')}}">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="logo-apple"></ion-icon>
                        </span>
                        <span class="title special">Brand Name</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('AdminDasboard')}}">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('addClinic')}}">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Add Clinic</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('showAdd')}}">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Add Doctors</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('ShowSurgery')}}">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="title">Add Surgery</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title logOut">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="{{asset('Admin/imgs/customer01.jpg')}}" alt="">
                </div>
            </div>

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">1,504</div>
                        <div class="cardName">Daily Views</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">80</div>
                        <div class="cardName">Sales</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">284</div>
                        <div class="cardName">Comments</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">$7,842</div>
                        <div class="cardName">Earning</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
            </div>

            <!-- ================ Order Details List ================= -->
            <div class="contact-box">
                <div class="left"  style="background: url({{asset('Admin/imgs/pexels-cottonbro-studio-3944463.jpg')}}) no-repeat center;background-size: cover;"></div>
                <form method="POST" action="{{route('doctorsInfo')}}" enctype="multipart/form-data">
                    @csrf
                <div class="right">
                    <h2>Add Doctor</h2>
                    <input type="text" class="field" placeholder="Doctor Name" name="DNAme">
                    <input type="file" class="field" name="photo" >
                    <textarea placeholder="Doctor description" class="field" name="Ddescription"></textarea>
                    <label for="cars" class="labSelect">Avaliable Days:</label>
                    <select name="avilableDays" id="category" class="field" multiple>
                        <option value="Sat">Sat</option>
                        <option value="sun">sun</option>
                        <option value="mon">mon</option>
                        <option value="tou">tou</option>
                        <option value="thr">thr</option>
                        <option value="wens">wens</option>
                        <option value="fri">fri</option>
                    </select>
                    <label for="cars" class="labSelect">Clinic:</label>
                    <select name="clinics_id" id="category" class="field">
                        @foreach($Clinics as $Clinic)
                            <option value="{{$Clinic->id}}">
                                {{$Clinic->clinicName}}
                            </option>
                        @endforeach
                    </select>
                    <input type="number" class="field" placeholder="Age" name="age">
                    <input type="number" class="field" placeholder="Graduation Yesr" name="DGragute">
                    <button class="btn" type="submit">Send</button>
                </div>
                </form>
            </div>

        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="{{asset('Admin/js/main.js')}}"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
