<?php 
// koneksi ke database 

$conn = mysqli_connect("localhost","root","","perpustelkom");

function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row ;
    }
    return $rows;
}

function tambah($data){
    global $conn;  
    if( isset($data["submit"])){ 
        if( empty(($data["nama"])) || empty(($data["nrp"])) || empty(($data["harga"])) || empty(($data["gmail"])) || empty(($data["merek"]))){

            echo "
                <script> 
                    alert('data gagal ditambahkan blok');
                    document.location.href = 'tambah.php';
                </script>
                ";
        }
        else{
            echo "
                <script> 
                    alert('data berasil ditambahkan blok');
                    document.location.href = 'index.php';

                </script>
                ";
            // ambil data dari setiap elemen dalam form 
            $nama = htmlspecialchars($data["nama"]);
            $nrp = htmlspecialchars($data["nrp"]);
            $harga = htmlspecialchars($data["harga"]);
            $gmail = htmlspecialchars($data["gmail"]);
            $merek = htmlspecialchars($data["merek"]);
            $gambar = htmlspecialchars($data["gambar"]);
    
            // query insert data 
            $query = "INSERT INTO databuku  VALUES
                            ('','$nama','$nrp','$harga','$gmail','$gambar','$merek')
                        ";
    
        }
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
    }
}
function edit($data){
    global $conn;  
    if( isset($data["submit"])){
        if( empty(($data["nama"])) || empty(($data["nrp"]))|| empty(($data["harga"])) || empty(($data["gmail"])) || empty(($data["merek"])) || empty(($data["gambar"]))){

            echo "
                <script> 
                    alert('data gagal diubah blok');
                    document.location.href = 'index.php';
                </script>
                ";
        }
        else{
            echo "
            <script> 
                alert('data berhasil diubah blok');
                document.location.href = 'index.php';
            </script>
            ";
            $id = htmlspecialchars($data["id"]);
            $nama = htmlspecialchars($data["nama"]);
            $nrp = htmlspecialchars($data["nrp"]);
            $harga = htmlspecialchars($data["harga"]);
            $gmail = htmlspecialchars($data["gmail"]);
            $merek = htmlspecialchars($data["merek"]);
            $gambar = htmlspecialchars($data["gambar"]);
        
            // query insert data 
            $query = "UPDATE databuku SET nama='$nama', nrp='$nrp' , harga='$harga', gmail='$gmail', gambar='$gambar' , merek='$merek'WHERE id = $id ";
    
        }
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
        }
} 

function hapus($id){
    global $conn;
    $query = "DELETE FROM databuku WHERE id = $id";
    mysqli_query($conn, $query);
    echo "
    <script> 
        document.location.href = 'index.php';
    </script>
    ";
}
function cari($keyword){
    global $conn;
    $query = "SELECT * FROM databuku WHERE nama = '$keyword'";
}

?>