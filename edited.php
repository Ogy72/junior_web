<?
include_once "koneksi.php";
$conn = $connect;

if(isset($_POST["get"])){
    $get = $_POST["get"];
    
    if($get == "data jurusan"){
        $kd = $_POST["kd"];
        $query = "SELECT * FROM jurusan WHERE kd_jurs='$kd'";

        $data = mysqli_fetch_array(mysqli_query($conn, $query));
        echo json_encode($data);
    }
    else if($get == "data prodi"){
        $kd = $_POST["kd"];
        $query = "SELECT * FROM prodi WHERE kd_prodi='$kd'";

        $data = mysqli_fetch_array(mysqli_query($conn, $query));
        echo json_encode($data);
    }
}
?>