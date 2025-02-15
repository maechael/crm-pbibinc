@extends('admin.admin_master')
@section('admin')
    <div class="page-content pt-6">
        <div class="container-fluid">

            <div class="row">
                <div>
                    @include('leads.appointed_leads.for-rewrite-lead-profile-view.header-profile-section', [
                        'leads' => $lead,
                        'product' => $product,
                    ])
                </div>
            </div>

            <div class="row">
                <div class="col-3">
                    <div class="card"
                        style="background-color: white; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05); border-radius: 10px; overflow: hidden;">
                        <div class="card-body">
                            <div class="row">
                                <div class="card-content">
                                    <div class="row mb-3">
                                        <h5>Contact Information</h5>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-6">
                                            <strong>Email Address:</strong>
                                            <br>
                                            <strong>{{ $generalInformation->email_address }}</strong>
                                        </div>
                                        <div class="col-6">
                                            <strong>Tel Num:</strong>
                                            <br>
                                            <strong> {{ $lead->tel_num }}</strong>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <strong>Alt Num:</strong>
                                        <br>
                                        <strong>{{ $generalInformation->alt_num ? $generalInformation->alt_num : $lead->tel_num }}</strong>
                                    </div>

                                    <div class="row">
                                        <hr>
                                    </div>
                                    <div class="row mb-3">
                                        <h5>Location Details</h5>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-6">
                                            <strong>Location:</strong>
                                            <br>
                                            <strong>{{ $usAddress->city . ', ' . $usAddress->state }}</strong>
                                        </div>

                                        <div class="col-6">
                                            <strong>Local Time:</strong>
                                            <br>
                                            <strong>{{ $localTime->format('M-d-Y g:iA') }}</strong>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-6">
                                            <strong>Address:</strong>
                                            <br>
                                            <strong>{{ $generalInformation->address }}</strong>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <hr>
                                    </div>
                                    <div class="row mb-3">
                                        <h5>Company Information</h5>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-6">
                                            <strong>Full Time Employee:</strong>
                                            <br>
                                            <strong>{{ $generalInformation->full_time_employee }}</strong>
                                        </div>
                                        <div class="col-6">
                                            <strong>Part Time Employee:</strong>
                                            <br>
                                            <strong>{{ $generalInformation->part_time_employee }}</strong>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-6">
                                            <strong>Owners Payroll:</strong>
                                            <br>
                                            <strong>${{ number_format($generalInformation->owners_payroll, 2, '.', ',') }}</strong>
                                        </div>
                                        <div class="col-6">
                                            <strong>Employee Payroll:</strong>
                                            <br>
                                            <strong>${{ number_format($generalInformation->employee_payroll, 2, '.', ',') }}</strong>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-6">
                                            <strong>Gross Receipt:</strong>
                                            <br>
                                            <strong>${{ number_format($generalInformation->gross_receipt, 2, '.', ',') }}</strong>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-9">
                    <div class="tab-content text-muted">
                        <div class="tab-pane fade show active" id="summary" role="tabpanel">
                            @include('leads.appointed_leads.apptaker-leads-view.profile-summary', [
                                'leads' => $lead,
                                'leadId' => $lead->id,
                                'carriers' => $carriers,
                                'markets' => $markets,
                                'templates' => $templates,
                            ])
                        </div>

                        <div class="tab-pane fade show" id="product" role="tabpanel">
                            <div class="card"
                                style="background-color: white; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05); border-radius: 10px; overflow: hidden;">
                                <div class="card-body">
                                    <ul class="nav nav-pills nav-justified" role="tablistProduct">
                                        @foreach ($products as $key => $productKey)
                                            <li class="nav-item waves-effect waves-light">
                                                <a class="nav-link navProfile {{ $key === 0 ? 'active' : '' }}"
                                                    data-bs-toggle="tab"
                                                    href="#{{ str_replace(' ', '', $productKey->product) }}" role="tab"
                                                    id="{{ str_replace(' ', '', $productKey->product) }}Button"
                                                    style="white-space: nowrap;">
                                                    {{ $productKey->product }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <div class="tab-content p-3 text-muted">
                                        @foreach ($products as $key => $productKey)
                                            <div class="tab-pane fade show  {{ $key === 0 ? 'show active' : '' }}"
                                                id="{{ str_replace(' ', '', $productKey->product) }}" role="tabpanel">
                                                @includeWhen(
                                                    $productKey->product == 'General Liability',
                                                    'leads.appointed_leads.product-view.general-liability-profile',
                                                    [
                                                        'generalLiabilities' =>
                                                            $lead->generalInformation->generalLiabilities,
                                                        'actionButtons' => true,
                                                    ]
                                                )
                                                @includeWhen(
                                                    $productKey->product == 'Workers Compensation',
                                                    'leads.appointed_leads.product-view.workers-comp-profile',
                                                    [
                                                        'generalInformation' => $lead->generalInformation,
                                                        'actionButtons' => true,
                                                    ]
                                                )
                                                @includeWhen(
                                                    $productKey->product == 'Commercial Auto',
                                                    'leads.appointed_leads.product-view.commercial-auto-profile',
                                                    [
                                                        'generalInformation' => $lead->generalInformation,
                                                        'actionButtons' => true,
                                                    ]
                                                )
                                                @includeWhen(
                                                    $productKey->product == 'Excess Liability',
                                                    'leads.appointed_leads.product-view.excess-liability-profile',
                                                    [
                                                        'generalInformation' => $lead->generalInformation,
                                                        'actionButtons' => true,
                                                    ]
                                                )
                                                @includeWhen(
                                                    $productKey->product == 'Tools Equipment',
                                                    'leads.appointed_leads.product-view.tools-equipment-profile',
                                                    [
                                                        'generalInformation' => $lead->generalInformation,
                                                        'actionButtons' => true,
                                                    ]
                                                )
                                                @includeWhen(
                                                    $productKey->product == 'Builders Risk',
                                                    'leads.appointed_leads.product-view.builders-risk-profile',
                                                    [
                                                        'generalInformation' => $lead->generalInformation,
                                                        'actionButtons' => true,
                                                    ]
                                                )
                                                @includeWhen(
                                                    $productKey->product == 'Business Owners',
                                                    'leads.appointed_leads.product-view.business-owners-profile',
                                                    [
                                                        'generalInformation' => $lead->generalInformation,
                                                        'actionButtons' => true,
                                                    ]
                                                )
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="activityLog" role="tabpanel">
                            <div class="card"
                                style="background-color: white; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05); border-radius: 10px; overflow: hidden;">
                                <div class="card-body">
                                    @include('leads.appointed_leads.log-activity.activity-log', [
                                        'generalInformation' => $generalInformation,
                                    ])
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="quotation" role="tabpanel">
                            <div class="card"
                                style="background-color: white; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05); border-radius: 10px; overflow: hidden;">
                                <div class="card-body">
                                    @include('leads.appointed_leads.rewrite-quotation-forms/forms', [
                                        'product' => $product,
                                        'generalInformation' => $generalInformation,
                                        'quationMarket' => $quationMarket,
                                        'complianceOfficer' => $complianceOfficer,
                                        'policyDetail' => $policyDetail,
                                    ])
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="messages" role="tabpanel">
                            @include('leads.appointed_leads.log-activity.notes-log', [
                                'generalInformation' => $generalInformation,
                            ])
                        </div>

                        <div class="tab-pane fade show" id="accounting" role="tabpanel">
                            <div class="card"
                                style="background-color: white; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05); border-radius: 10px; overflow: hidden;">
                                <div class="card-body">
                                    @include('leads.appointed_leads.accounting-tab.index', [
                                        'generalInformation' => $lead->generalInformation,
                                    ])
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade show" id="financingAgreement" role="tabpanel">
                            <div class="card"
                                style="background-color: white; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05); border-radius: 10px; overflow: hidden;">
                                <div class="card-body">
                                    @include(
                                        'customer-service.financing.finance-agreement.financing-table',
                                        [
                                            'leadId' => $lead->id,
                                        ]
                                    )
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade show" id="bindingDocs" role="tabpanel">
                            <div class="card"
                                style="background-color: white; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05); border-radius: 10px; overflow: hidden;">
                                <div class="card-body">
                                    @include('customer-service.binding-docs-pfa.index', [
                                        'generalInformation' => $generalInformation,
                                        'product' => $product,
                                        'leadId' => $generalInformation->lead->id,
                                    ])
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="emails" role="tabpanel">
                            <div class="card"
                                style="background-color: white; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05); border-radius: 10px; overflow: hidden;">
                                <div class="card-body">
                                    @include('email.index', [
                                        'productId' => $product->id,
                                        'templates' => $templates,
                                    ])
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="policyList" role="tabpanel">
                            <div class="card"
                                style="background-color: white; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05); border-radius: 10px; overflow: hidden;">
                                <div class="card-body">
                                    @include('customer-service.policy.policy-lead-table-list', [
                                        'productId' => $product->id,
                                        'templates' => $templates,
                                        'leadId' => $lead->id,
                                        'carriers' => $carriers,
                                        'markets' => $markets,
                                    ])
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                $('.quotation-form').hide()
                var target = '#generalLiabilitiesQuoationForm';
                $(target).show();
                $('.navProfile').on('click', function() {
                    $('.quotation-form').hide()
                    target = $(this).attr('href');
                    if (target == '#generalLiabilites') {
                        $('#generalLiabilitiesQuoationForm').show();
                    } else if (target == '#workersCompensation') {
                        $('#workersCompensationForm').show();
                    } else if (target == '#commercialAuto') {
                        $('#commercialAutoForm').show();
                    } else if (target == '#excessLiabiliy') {
                        $('#excessLiabilityForm').show();
                    } else if (target == '#toolsEquipment') {
                        $('#toolsEquipmentForm').show();
                    } else if (target == '#buildersRisk') {
                        $('#buildersRiskForm').show();
                    } else if (target == '#bop') {
                        $('#businessOwnersPolicyForm').show();
                    }
                });

                $('#editGeneralInformationButton').on('click', function() {
                    var url = "{{ env('APP_FORM_URL') }}";
                    var id = "{{ $lead->id }}";
                    var productId = "{{ $product->id }}"
                    $.ajax({
                        url: "{{ route('list-lead-id') }}",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        dataType: 'json',
                        method: 'POST',
                        data: {
                            leadId: id,
                            productId: productId,

                        },
                    });
                    window.open(`${url}general-information-form/edit`, "s_blank",
                        "width=1000,height=849");

                });

            });
        </script>
    @endsection
