<?php


class BookController {

    public function index()
    {
        $submitPresseSearch = filter_input(INPUT_POST, "btnSearch");
        $search = filter_input(INPUT_POST, "txtSearch");
        if ($submitPresseSearch == 'search') {
            $link = PDOUtil::createConnection();
            $query = "call spBookGet('$search','-1')";
            $result = $link->query($query);
            $result->setFetchMode(PDO::FETCH_OBJ);
            $books = $result->fetchAll();
            PDOUtil::closeConnection($link);
            include_once 'view/book.php';
        }else{
            $link = PDOUtil::createConnection();
            $query = "call spBookGet('','-1')";
            $result = $link->query($query);
            $result->setFetchMode(PDO::FETCH_OBJ);
            $books = $result->fetchAll();
            PDOUtil::closeConnection($link);
            include_once 'view/book.php';
        }

    }

    public function addBook(){
        $submitPressedAdd = filter_input(INPUT_POST, "btnSubmitAdd");
        $bookid = filter_input(INPUT_GET, 'boid');

        $link = PDOUtil::createConnection();
        $query = "call spBookGet('$bookid',-1)";
        $result = $link->query($query);
        $result->setFetchMode(PDO::FETCH_OBJ);
        $data=$result->fetchAll();
        PDOUtil::closeConnection($link);

        if ($submitPressedAdd=='Add') {
            if (trim($bookid) == '') {
                $isbn = filter_input(INPUT_POST, "txtISBN");
                $title = filter_input(INPUT_POST, "txtTilte");
                $author = filter_input(INPUT_POST, "txtAuthor");
                $publisher = filter_input(INPUT_POST, "txtPublisher");
                $language = filter_input(INPUT_POST, "txtLanguage");
                $description = filter_input(INPUT_POST, "txtDescription");
                $stock = filter_input(INPUT_POST, "txtStock");
                $user = $_SESSION['user_ID'];
                if (isset($_FILES['albumsCover']['name'])) {
                    $targetDirectory = 'uploads/';
                    $fileExtension = pathinfo($_FILES['albumsCover']['name'], PATHINFO_EXTENSION);
                    $newFileName = $title . '.' . $fileExtension;
                    $targetFile = $targetDirectory . $newFileName;
                    if ($_FILES['albumsCover']['size'] > 1024 * 2048) {
                        echo '<div>Upload error. File size exceed 2MB</div>';
                    } else {
                        move_uploaded_file($_FILES['albumsCover']['tmp_name'], $targetFile);
                    }
                }
                $link = PDOUtil::createConnection();
                $query = "call spBookSet('', ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = $link->prepare($query);
                $stmt->bindParam(1, $isbn);
                $stmt->bindParam(2, $title);
                $stmt->bindParam(3, $author);
                $stmt->bindParam(4, $publisher);
                $stmt->bindParam(5, $language);
                $stmt->bindParam(6, $newFileName);
                $stmt->bindParam(7, $description);
                $stmt->bindParam(8, $stock);
                $stmt->bindParam(9, $user);
                $stmt->setFetchMode(PDO::FETCH_OBJ);
                $stmt->execute();
                $hasil = $stmt->fetchAll();
                PDOUtil::closeConnection($link);
                if ($hasil[0]->ErrCode == 0) {
                    echo '<script>alert("' . $hasil[0]->ErrMsg . '")</script>';
                }
            } else {
                $isbn = filter_input(INPUT_POST, "txtISBN");
                $title = filter_input(INPUT_POST, "txtTilte");
                $author = filter_input(INPUT_POST, "txtAuthor");
                $publisher = filter_input(INPUT_POST, "txtPublisher");
                $language = filter_input(INPUT_POST, "txtLanguage");
                $cover = filter_input(INPUT_POST, "txtCover");
                $description = filter_input(INPUT_POST, "txtDescription");
                $stock = filter_input(INPUT_POST, "txtStock");
                $user = $_SESSION['user_ID'];

                $link = PDOUtil::createConnection();
                $query = "call spBookSet(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = $link->prepare($query);
                $stmt->bindParam(1, $bookid);
                $stmt->bindParam(2, $isbn);
                $stmt->bindParam(3, $title);
                $stmt->bindParam(4, $author);
                $stmt->bindParam(5, $publisher);
                $stmt->bindParam(6, $language);
                $stmt->bindParam(7, $cover);
                $stmt->bindParam(8, $description);
                $stmt->bindParam(9, $stock);
                $stmt->bindParam(10, $user);
                $stmt->setFetchMode(PDO::FETCH_OBJ);
                $stmt->execute();
                $hasil = $stmt->fetchAll();
                PDOUtil::closeConnection($link);
                if ($hasil[0]->ErrCode == 0) {
                    echo '<script>alert("' .'update berhasil '. $hasil[0]->ErrMsg . '")</script>';
                }
            }
        }
        $link = PDOUtil::createConnection();
        $query = "call spBookGet('',-1)";
        $result = $link->query($query);
        $result->setFetchMode(PDO::FETCH_OBJ);
        $books=$result->fetchAll();
        PDOUtil::closeConnection($link);
        include_once 'view/bookManagement.php';
    }

    public function delete(){

        $command = filter_input(INPUT_GET, 'cmd');
        if (isset($command) && $command == 'del') {
            $bookid = filter_input(INPUT_GET, 'boid');
            echo '<br/>'.$command . ' - '. $bookid . '<br/>';
            if (isset($bookid)) {
                echo '<br/>'.$command . ' - '. $bookid . '<br/>';

                $link = PDOUtil::createConnection();
                $query ="call spBookDel(?)";
                $stmt = $link->prepare($query);
                $stmt->bindParam(1, $bookid);
                $stmt->setFetchMode(PDO::FETCH_OBJ);
                $stmt->execute();
                $hasil = $stmt->fetchAll();
                PDOUtil::closeConnection($link);
                if ($hasil[0]->ErrCode == 0) {
                    echo '<script>alert("' . $hasil[0]->ErrMsg . '")</script>';
                }
            }
        }
    }

    public function viewBook(){
        $bookid = filter_input(INPUT_GET, 'boid');
        if (isset($bookid) && trim($bookid)!=' ') {
            $link = PDOUtil::createConnection();
            $query = "call spBookGet('$bookid',-1)";
            $result = $link->query($query);
            $result->setFetchMode(PDO::FETCH_OBJ);
            $data = $result->fetchAll();
            PDOUtil::closeConnection($link);
        }
        $link = PDOUtil::createConnection();
        $query = "call spBookGet('','-1')";
        $result = $link->query($query);
        $result->setFetchMode(PDO::FETCH_OBJ);
        PDOUtil::closeConnection($link);
        $books=$result->fetchAll();
        include_once 'view/bookDetails.php';
    }

    public function search(){

    }



}