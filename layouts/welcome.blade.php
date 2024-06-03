<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Kesehatan</title>
   
</head>

<body >
    <div class="header">
       
        <div class="akses">
            <a href="register">Sign Up</a>
            <a href="login">Login</a>
        </div>
    </div>
    <div class="rs">
        {{-- <img id="gambarContainer" s rc="" alt="Gambar Sesuai Waktu"> --}}
        <img src="gambar/Large Diverse Group of Medical Staff in Uniform Stock Photo - Image of happy, diversity_ 40192538.jpeg" alt="gambar utama">
        <h1 id="salam"></h1>
    </div>
    <div class="fitur">
        <h1></h1>
        <div class="lain">
        <p>DOKTER</p>
        <p>PASIEN</p>
        <p>REKAM</p>
        <p>OBAT</p>
        <p>DIAGNOSA</p>
        </div>
    </div>
</body>

<style>
    body {
        margin: 0;
        padding: 0;
        background-color: #ffffff;
    }

    .header {
        height: 4rem;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: fixed;
        background-color: black;
        top: 0rem;
    }

    img {
        margin-top: -1rem;
        width: 100%;
    }

    .akses {
        margin-left: 3rem;
    }

    a {
        background-color: rgb(255, 255, 255);
        color: black;
        padding: 1rem;
        border-radius: 10px;
        text-decoration: none;
        margin-right: 1.5rem;
        font-weight: bold;
    }

    .rs {
        margin: 5rem auto;
    }

    #salam {
        margin-top: -34rem;
        color: #000;
        font-size: 7rem;
        text-align: center;
    }

    #gambarContainer {
        width: 100%;
        margin-top: -1rem;
        object-fit: cover;
    }
    
    .fitur{
        background: linear-gradient(to bottom, #ffffff, #006ab6);
        height: 20rem;
        /* bottom: 19rem; */
    }

    .lain {
        display: flex;
        align-items: center;
        justify-content: space-around;
        margin-top: -29rem;
    }

    h1 {
        margin :30rem 2rem;
        /* margin-bottom: 19rem; */
    }

   

    @media only screen and (max-width: 600px) {
        .header {
            height: 3rem;
        }

        .header img {
            height: 3rem;
        }

        a {
            background-color: rgba(255, 255, 255, 0.914);
            color: black;
            padding: 0.5rem;
            border-radius: 10px;
            margin-right: 19px;
        }
        #salam {
            margin-top: -13rem;
            color: #000;
            font-size: 3rem;
            text-align: center;
        }
         img {

        }

         .fitur {
            height: 20rem;
         }
         .lain {
            display: flex;
            flex-wrap: wrap;
            margin-top: -10rem;
         }
         h1 {
             margin :11rem 2rem;
        }
    }

    
</style>

<script>
    function setNormalImageByTime() {
        const currentTime = new Date().getHours();

        // Atur gambar sesuai dengan waktu
        let imagePath;
        if (currentTime >= 5 && currentTime < 10) {
            imagePath = "{{ asset('gambar/bgpagi.jpg') }}";
        } else if (currentTime >= 10 && currentTime < 15) {
            imagePath = "{{ asset('gambar/bgsiang.jpg') }}";
        } else if (currentTime >= 15 && currentTime < 18) {
            imagePath = "{{ asset('gambar/bgsore.jpg') }}";
        } else {
            imagePath = "{{ asset('gambar/bgmalam.jpg') }}";
        }

        document.getElementById("gambarContainer").src = imagePath;
    }

    setNormalImageByTime();

    function getGreeting() {
        const waktu = new Date();
        const jam = waktu.getHours();

        let salam;

        if (jam >= 5 && jam < 11) {
            salam = "Selamat Pagi";
        } else if (jam >= 11 && jam < 15) {
            salam = "Selamat Siang";
        } else if (jam >= 15 && jam < 18) {
            salam = "Selamat Sore";
        } else {
            salam = "Selamat Malam";
        }

        return salam;
    }

    const salamElement = document.getElementById('salam');
    const salam = getGreeting();
    salamElement.textContent = salam;
</script>

</html>