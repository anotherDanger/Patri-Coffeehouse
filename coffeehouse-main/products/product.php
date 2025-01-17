<?php 

require_once "../koneksi/conn.php";

class Product extends Conn
{
    private $gambar;
    public $products;

    public function getProduct():void
    {
        $conn = $this->conn;
        $rows = [];
        $query = $conn->prepare("SELECT * FROM products");
        $query->execute();
        while($row = $query->fetch(PDO::FETCH_ASSOC))
        {
            $rows[] = $row;
        }

        $this->products = $rows;
    }

    public function addProduct($data)
    {
        $conn = $this->conn;
        $product_id = $data["product_id"];
        $product_name = $data["product_name"];
        $product_price = $data["product_price"];
        $product_stock = $data["product_stock"];
        $product_desc = $data["product_desc"];

        $image = $this->gambar;

        $sql = "INSERT INTO products VALUES(?, ?, ?, ?, ?, ?)";
        $query = $conn->prepare($sql);
        $query->execute([$product_id, $product_name, $product_price, $product_stock, $product_desc, $image]);

        return $query->rowCount();

    }

    public function updtProduct($data)
    {
        $conn = $this->conn;
        $product_id = $data['update_p_id'];
        $product_name = $data['update_p_name'];
        $product_price = $data['update_p_price'];
        $product_detail = $data['update_p_detail'];
        $image = $this->productUpload();

        $sql = "update products SET product_id = ?, product_name = ?, product_price = ?, product_desc = ?, product_image = ? WHERE product_id = '$product_id'";
        $query = $conn->prepare($sql);
        $query->execute([$product_id, $product_name, $product_price, $product_detail, $image]);
        
        return $query->rowCount();
    }

    public function productUpload()
    {
        $namaFile = $_FILES['image']['name'];
        $ukuranFile = $_FILES['image']['size'];
        $error = $_FILES['image']['error'];
        $tmpName = $_FILES['image']['tmp_name'];

        if($error === 4)
        {
            echo "<script>
                alert('Tidak ada file yang dipilih');
            </script>";
            return false;
        }
        $ekstensiValid = ['jpg','jpeg','png'];
        $ekstensiFile = explode('.', $namaFile);
        $ekstensiFile = strtolower(end($ekstensiFile));
        
        if(!in_array($ekstensiFile, $ekstensiValid))
        {
            echo "<script>
                alert('Ekstensi tidak didukung');
            </script>";
            return false;
        }

        if($ukuranFile > 1000000)
        {
            echo "<script>
                alert('Ukuran terlalu besar');
            </script>";
            return false;
        }

        $namaBaru = uniqid();
        $namaBaru .= '.';
        $namaBaru .= $ekstensiFile;

        move_uploaded_file($tmpName, '../img-coffee/' . $namaBaru);

        $this->gambar = $namaBaru;
        
        return $namaBaru;
    }

    public function deleteProduct($id)
    {
        $conn = $this->conn;
        $sql = "DELETE FROM products WHERE product_id = ?";
        $query = $conn->prepare($sql);
        $query->execute([$id]);

        return $query->rowCount();
    }

}



?>