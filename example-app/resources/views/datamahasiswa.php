<!DOCTYPE html>
<html>
    <head>
        <title>test</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
 
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Poppins', sans-serif;
            }
            
            body {
                width: 100%;
                min-height: 100vh;
                background-image: url(https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwallpapercave.com%2Fwp%2Fwp2553315.jpg&f=1&nofb=1&ipt=c627202dda6cfe405759363add5aca14c85e6f1a9c6c4a2a8a097da7a5318a34&ipo=images);
                background-position: center;
                background-size: cover;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            
            .container {
                width: 400px;
                min-height: 400px;
                background: #FFF;
                border-radius: 5px;
                box-shadow: 0 0 5px rgba(0,0,0,.3);
                padding: 40px 30px;
            }
            
            .container .login-text {
                color: #111;
                font-weight: 500;
                font-size: 1.1rem;
                text-align: center;
                margin-bottom: 20px;
                display: block;
                text-transform: capitalize;
            }
            
            .container .login-email .input-group {
                width: 100%;
                height: 50px;
                margin-bottom: 25px;
            }
            
            .container .login-email .input-group input {
                width: 100%;
                height: 100%;
                border: 2px solid #e7e7e7;
                padding: 15px 20px;
                font-size: 1rem;
                border-radius: 30px;
                background: transparent;
                outline: none;
                transition: .3s;
            }
            
            .container .login-email .input-group input:focus, .container .login-email .input-group input:valid {
                border-color: #a29bfe;
            }
            
            .container .login-email .input-group .btn {
                display: block;
                width: 100%;
                padding: 15px 20px;
                text-align: center;
                border: none;
                background: #a29bfe;
                outline: none;
                border-radius: 30px;
                font-size: 1.2rem;
                color: #FFF;
                cursor: pointer;
                transition: .3s;
            }
            
            .container .login-email .input-group .btn:hover {
                transform: translateY(-5px);
                background: #6c5ce7;
            }
            
            .login-register-text {
                color: #111;
                font-weight: 600;
            }
            
            .login-register-text a {
                text-decoration: none;
                color: #6c5ce7;
            }
            
            .container-logout {
                width: 500px;
                min-height: 200px;
                background: #FFF;
                border-radius: 5px;
                box-shadow: 0 0 5px rgba(0,0,0,.3);
                padding: 40px 30px;
            }
            
            .container-logout .login-email .input-group .btn {
                display: block;
                width: 100%;
                padding: 15px 20px;
                text-align: center;
                border: none;
                background: #a29bfe;
                outline: none;
                border-radius: 30px;
                font-size: 1.2rem;
                color: #FFF;
                cursor: pointer;
                transition: .3s;
                margin-top: 20px;
            }
            
            .container-logout .login-email .input-group .btn:hover {
                transform: translateY(-5px);
                background: #6c5ce7;
            }
            
            @media (max-width: 430px) {
                .container {
                    width: 300px;
                }
            }
        </style>    
        <link rel="stylesheet" href="./example-app/app.css">
         <!--Metas-->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="WEB NO RESPON">
        <meta name="author" content="testroom">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!--berkas-->
       <link rel="shortcut icon" type="image/x-icon" href="https://w7.pngwing.com/pngs/882/180/png-transparent-test-automation-software-testing-manual-testing-selenium-others-angle-trademark-logo.png" />
       <!--PLUGINS CSS STYLE-->
       <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
        <link rel="stylesheet" href="https://demo.themefisher.com/small-apps/plugins/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="https://demo.themefisher.com/small-apps/plugins/themify-icons/themify-icons.css">
        <link rel="stylesheet" href="https://demo.themefisher.com/small-apps/plugins/slick/slick.css">
        <link rel="stylesheet" href="https://demo.themefisher.com/small-apps/plugins/slick/slick-theme.css">
        <link rel="stylesheet" href="https://demo.themefisher.com/small-apps/plugins/fancybox/jquery.fancybox.min.css">
        <link rel="stylesheet" href="https://demo.themefisher.com/small-apps/plugins/aos/aos.css">
        <!--CUSTOM CSS-->
        <link href="https://demo.themefisher.com/small-apps/css/style.css" rel="stylesheet">
        <link rel="stylesheet" href= https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css>
    </head>
    <body>
        <nav>
        <header backgroud-color="black"; >
            <div class="container">
            <nav class="navbar navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <img> 
                        </a >
                    </div>
                </nav> 
                <form action="contact.php" method="POST">
                    <legend>Daftar Data Mahasiswa</legend>
                    <table>
                        <tr>
                        <div class="form-floating mb-4">
                            <input type="email" class="form-control" id="floatingInput" placeholder="nama">
                            <label for="floatingInput"s>NAMA</label>
                        </div>
                        </tr>
                        <div class="form-floating mb-4">
                            <input type="email" class="form-control" id="floatingInput" placeholder="nim">
                            <label for="floatingInput">NIM</label>
                        </div>
                        </tr>
                        <tr>
                            <td>
                                <label for="jenis_kelamin">
                                    JENIS KELAMIN  
                                </label>
                            </td>
                            <td>
                                <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="laki-laki" require>Laki-Laki
                                <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="perempuan" require>Perempuan
                        </tr>
                        <tr>
                        <div class="form-floating mb-4">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                <option selected="">Agama</option>
                                <option value="1">Hindu</option>
                                <option value="2">Islam</option>
                                <option value="3">Kristen</option>
                            </select>
                            <label for="floatingSelect">Pilih Agama</label>
                        </div>
        
                        </tr>
                        <tr>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">ALAMAT</label>
                            </div>
                        </tr>
                        <td>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                    <option selected>Jurusan</option>
                                    <option value="1">MTI</option>
                                    <option value="2">DGM</option>
                                    <option value="3">SK</option>
                                </select>
                                <label for="floatingSelect">Pilih Jurusan</label>
                            </div>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                        <option selected>Minat</option>
                                        <option value="1">Keamanan</option>
                                        <option value="2">Robotic</option>
                                        <option value="3">Programan</option>
                                    </select>
                                    <label for="floatingSelect">Bidang Minat</label>
                                </div>
                        </tr>
                        <tr>
                            <td>
                                <button type=submit name"simpan">KONFIMASI</button>
                    </table>
                </form>
            </div>
        </header>
        </nav>
    </body>           
</html>
