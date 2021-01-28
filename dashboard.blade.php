
            <!DOCTYPE html>
            <html>
                <head>
                    <title>
                        CMARS
                    </title>
                    <style>
                        .sidenav{
                            height:100%; 
                            width: 160px;
                            position: fixed;
                            z-index: 1;
                            top:0;
                            left: 0;
                            background-color:#9acd32;
                            padding-top:20px;
                        }
                        .sidenave a{
                            padding:6px 8px 6px 16px;
                            text-decoration: none;
                            font-size: 25px;
                            color: # 818181;
                            display: block;
                        }
                        .main{
                           
                            background-color:#ffa500;
                            
                            margin-left:155px;
                            padding:0px 10px;
                        }
                        @media screen and (max-heiht:450px){
                            .sidenave {padding-top:15px;}
                            .sidenav a{font-size:18px;}
                        }    
                        
                        </style>
                </head>
        <body>
        
                <div class="sidenav">
               
        
                    <ul>
                    <li>
                        <a class="nav-link" href="dashboard.blade.php">
                           
                            <p>Dashboard</p>
                        </a>
                    </li>
                    
                       <li> <a href="health officer.blade.php">
                          
                            <p>HEALTH OFFICER</p>
                        </a>
                    </li>
                    
                    <li>  <a href="patients.blade.php">
                          
                            <p>PATIENTS</p>
                        </a>
                        </li>
                    
                        <li>   <a href="Hospitals.blade.php">
                            
                            <p>HOSPIIALS</p>
                        </a>
                    
                        </li>
                        <li>   <a  href="payments.blade.php">
                            
                            <p>PAYMENTS</p>
                        </a>
                    
                        </li>
                        <li>   <a href="treasury.blade.php">
                           <!-- <i class="nc-icon nc-pin-3"></i>-->
                            <p>TREASURY</p>
                        </a>
                        </li>
                    
                        <li>  <a  href="summary.blade.php">
                           <!-- <i class="nc-icon nc-pin-3"></i>-->
                            <p>SUMMARY</p>
                        </a>
                        </li>
                    </ul>
</div>
<div class="main">

    YOUR HEALTH MATTERS  <br>
    <br><br><br>
    <button> <a href="logout.php"> logout</button>                
                       
</div>     
</body>     
 </html>                
                  


