$(function () {
    $("#example").DataTable({
        fixedHeader: true,
        ordering: false,
        columnDefs: [{targets: [0], visible: false, searchable: false},
        {targets: [6], visible: false, searchable: false},
        {targets: [7], visible: false, searchable: false},
        {targets: [8], visible: false, searchable: false},
        {targets: [9], visible: false, searchable: false},
        {targets: [10], visible: false, searchable: false},
        {targets: [11], visible: false, searchable: false},
        {targets: [13], visible: false, searchable: false}]
    });
});

function add() {
    document.getElementById("form-client").reset();
    document.getElementById("id").value=0;
}

function edit(index) {
    var table = $('#example').DataTable();
    document.getElementById("id").value=table.cell(index,0).data();
    document.getElementById("masp").value=table.cell(index,1).data();
    document.getElementById("name").value=table.cell(index,2).data();
    document.getElementById("hinhanh").value=table.cell(index,10).data();
    document.getElementById("gianiemyet").value=Comma(table.cell(index,4).data());
    document.getElementById("giaban").value=Comma(table.cell(index,5).data());
    document.getElementById("vitri").value=table.cell(index,12).data();
    document.getElementById("url").value=table.cell(index,13).data();
    tinymce.get("mota").setContent(table.cell(index,6).data());
    tinymce.get("thanhphan").setContent(table.cell(index,7).data());
    tinymce.get("huongdan").setContent(table.cell(index,8).data());
    tinymce.get("khuyencao").setContent(table.cell(index,9).data());
    var opt=table.cell(index,11).data();
    document.getElementById("opt"+opt).selected = "true";
}
