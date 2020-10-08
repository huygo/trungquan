$(function () {
    $("#example").DataTable({
        fixedHeader: true,
        ordering: false
    });
});

function add() {
    document.getElementById("id").value=0;
    document.getElementById("form-client").reset();
}

function edit(index) {
    var table = $('#example').DataTable();
    var id=table.cell(index,0).data();
    document.getElementById("madon").value=table.cell(index,2).data();
    document.getElementById("khachhang").value=table.cell(index,3).data();
    document.getElementById("diachi").value=table.cell(index,4).data();
    document.getElementById("dienthoai").value=table.cell(index,9).data();
    document.getElementById("thanhtoan").value=table.cell(index,11).data();
    document.getElementById("ghichu").value=table.cell(index,10).data();
    $.get("views/donhangdetail.php?id="+id, function(data, status){
        document.getElementById("tbody").innerHTML=data;
    });
}
