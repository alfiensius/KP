function updateValueBook(book_id_local) {
    window.location="?navito=bookMng&boid="+book_id_local;

}
function deleteValueBook(book_id_local) {
    let confirmation=window.confirm("are you sure want to delete?");
    if (confirmation){
        window.location="?navito=bookMng&cmd=del&boid="+book_id_local;
    }
}

function addBook() {
    window.location="?navito=bookMng";

}
function getBookDetail(book_id_local) {
    window.location="?navito=bookDetails&boid="+book_id_local;

}