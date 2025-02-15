<table id="touchedPolicyTable" class="table table-bordered dt-responsive nowrap touchedPolicyTable"
    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead>
        <tr>
            <th>Old Policy Number</th>
            <th>Company Name</th>
            <th>Product</th>
            <th>Cancelled Date</th>
            <th>Number of Touches</th>
            <th>Last Touch By</th>
            <th></th>
        </tr>
    </thead>
</table>

<script>
    $(document).ready(function() {
        $('#touchedPolicyTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('get-touched-policies') }}",
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
            },
            columns: [{
                    data: 'policy_number',
                    name: 'policy_number'
                },
                {
                    data: 'company_name',
                    name: 'company_name'
                },
                {
                    data: 'product',
                    name: 'product'
                },
                {
                    data: 'cancelled_date',
                    name: 'cancelled_date'
                },
                {
                    data: 'number_of_touches',
                    name: 'number_of_touches'
                },
                {
                    data: 'last_touch_by',
                    name: 'last_touch_by'
                },
                {
                    data: 'action',
                    name: 'action'
                }
            ],
        });
    });
</script>
