<div class="row">
    <table id="followupTable" class="table table-bordered dt-responsive nowrap followupTable"
        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        <thead class="" style="background-color: #f0f0f0;">
            <th>Company Name</th>
            <th>Product</th>
            <th>Call Back</th>
            <th>Action</th>
            {{-- <th>Action</th> --}}
        </thead>
        <tbody>

        </tbody>
    </table>
</div>
<script>
    $(document).ready(function() {
        $('.followupTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('get-for-follow-up-product') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                }
            },
            columns: [{
                    data: 'companyName',
                    name: 'companyName'
                },
                {
                    data: 'product',
                    name: 'product'
                },
                {
                    data: 'callBack',
                    name: 'callBack'
                },
                {
                    data: 'action',
                    name: 'action'
                }
            ],
            order: [
                [2, 'asc']
            ]
        });
    });
</script>
