function getListaClubes() {
    if ($.fn.DataTable.isDataTable('#tblClubes')) {
        $('#tblClubes').DataTable().destroy();
    }

    $('#tblClubes').DataTable();
}
$(function () {
    getListaClubes();
});

