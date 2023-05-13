<footer>
    <div class="fixed-bottom bg-primary py-2">
        <div class="row">
            <div class="col text-center">
                <p class="mb-0 text-white" &copy;>Apps Webs Halcyon @ {{ date('Y') }}</p>
            </div>
        </div>
    </div>
</footer>

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

<script>
$(document).ready(function () {
    $('#datatable').DataTable();

    let row_number = 1;
    $("#add_row").click(function(e){
        e.preventDefault();
        let new_row_number = row_number - 1;
        $('#product' + row_number).html($('#product' + new_row_number).html()).find('td:first-child');
        $('#products_table').append('<tr id="product' + (row_number + 1) + '"></tr>');
        row_number++;
    });

    $("#delete_row").click(function(e){
        e.preventDefault();
        if(row_number > 1){
        $("#product" + (row_number - 1)).html('');
        row_number--;
        }
    });
});
</script>
    
</body>
</html>