<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Sertificate</title>
    
    <link rel="stylesheet" href="<?= base_url('assets2/css/bootstrap.css')?>">
    
    <link rel="stylesheet" href="<?= base_url('assets2/vendors/perfect-scrollbar/perfect-scrollbar.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets2/css/app.css') ?>">
    <link rel="shortcut icon" href="<?= base_url('assets2/images/logoy2.png')?>" type="image/x-icon">
</head>
<body>
    
<div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
    <div class="sidebar-header">
         <img src="assets2/images/logoy.png" style="width:180px; height:135px;" alt="logo" srcset="">
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            
            
                <li class='sidebar-title'>Main Menu</li>
            
            
            
                <li class="sidebar-item  ">
                <a href="<?= base_url('home2')?>" class='sidebar-link'>
                        <i data-feather="home" width="20"></i> 
                        <span>Dashboard</span>
                    </a>
                    
                </li>
                        
            
                <li class='sidebar-title'>Forms &amp; Tables</li>
            
            
            
                <li class="sidebar-item ">
                <a href="<?= base_url('events')?>" class='sidebar-link'>
                        <i data-feather="layout" width="20"></i> 
                        <span>Events</span>
                    </a>
                </li>

            
            
            
                <li class="sidebar-item  ">
                <a href="<?= base_url('certificate')?>" class='sidebar-link'>
                        <i data-feather="layers" width="20"></i> 
                        <span>Certificate</span>
                    </a>
                    
                </li>

            
            
            
                <li class="sidebar-item  ">
                <a href="<?= base_url('generate')?>"  class='sidebar-link'>
                        <i data-feather="file-text" width="20"></i> 
                        <span>Generate</span>
                    </a>
                    
                </li>
        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
        </div>
        <div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ml-auto">
                        <li class="nav-icon">
                            <a href="<?= base_url('login/logout');?>"  class="nav-link  nav-link-lg nav-link-user">
                                <div class="d-lg-inline-block">
                                    <i data-feather="log-out"></i>
                                </div>
                            </a>
                        </li>

                      

                    </ul>
                </div>
            </nav>
            
<div class="main-content container-fluid">
        <div class="page-title">
            <h3>Dashboard</h3>
        </div>
        <p>
    <section class="section">
        <div class="row mb-2">
            <div class="card widget-todo">
                    <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                        <h4 class="card-title d-flex">
                            <i class='bx bx-check font-medium-5 pl-25 pr-75'></i>WELCOME
                        </h4>
                    </div>
                    <div class="card-body px-0 py-1">
                         <table class='table table-borderless'>
                                <tr>
                                    <td>
                                    E - CERTIFICATE APPLICATION
                                    </td>
                                </tr>
                        </table>
                    </div>
            </div>
        </div>
    </section>
</div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-left">
                    <p>2024 &copy; TWC</p>
                    </div>
                    <div class="float-right">
                        <p>Crafted with <span class='text-danger'><i data-feather="heart"></i></span> by <a href="https://www.instagram.com/m.by__sana/">SN</a></p>
                    </div>
                </div>
            </footer>
            
    <script src="<?= base_url('assets2/js/feather-icons/feather.min.js')?>"></script>
    <script src="<?= base_url('assets2/vendors/perfect-scrollbar/perfect-scrollbar.min.js')?>"></script>
    <script src="<?= base_url('assets2/js/app.js')?>"></script>
    <script src="<?= base_url('assets2/js/main.js')?>"></script>
</body>
</html>