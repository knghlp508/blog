@extends("admin.layouts.headers")

    @section('content')

        @extends("admin.layouts.usercard")

        @extends("admin.layouts.sidebar")

        @extends("admin.layouts.nav")

        <!-- 标题 -->
        <div class="page-title">

            <div class="title-env">
                <h1 class="title">DataTable</h1>
                <p class="description">Dynamic table variants with pagination and other controls</p>
            </div>

            <div class="breadcrumb-env">

                <ol class="breadcrumb bc-1">
                    <li>
                        <a href="dashboard-1.html"><i class="fa-home"></i>Home</a>
                    </li>
                    <li>

                        <a href="tables-basic.html">Tables</a>
                    </li>
                    <li class="active">
                        <strong>Data Tables</strong>
                    </li>
                </ol>
            </div>
        </div>

        <!-- Removing search and results count filter -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Removing search and results count filter</h3>

                <div class="panel-options">
                    <a href="#" data-toggle="panel">
                        <span class="collapse-icon">&ndash;</span>
                        <span class="expand-icon">+</span>
                    </a>
                    <a href="#" data-toggle="remove">
                        &times;
                    </a>
                </div>
            </div>
            <div class="panel-body">

                <script type="text/javascript">
                    jQuery(document).ready(function($)
                    {
                        $("#example-2").dataTable({
                            dom: "t" + "<'row'<'col-xs-6'i><'col-xs-6'p>>",
                            aoColumns: [
                                {bSortable: false},
                                null,
                                null,
                                null,
                                null
                            ],
                        });

                        // Replace checkboxes when they appear
                        var $state = $("#example-2 thead input[type='checkbox']");

                        $("#example-2").on('draw.dt', function()
                        {
                            cbr_replace();

                            $state.trigger('change');
                        });

                        // Script to select all checkboxes
                        $state.on('change', function(ev)
                        {
                            var $chcks = $("#example-2 tbody input[type='checkbox']");

                            if($state.is(':checked'))
                            {
                                $chcks.prop('checked', true).trigger('change');
                            }
                            else
                            {
                                $chcks.prop('checked', false).trigger('change');
                            }
                        });
                    });
                </script>

                <table class="table table-bordered table-striped" id="example-2">
                    <thead>
                    <tr>
                        <th class="no-sorting">
                            <input type="checkbox" class="cbr">
                        </th>
                        <th>Student Name</th>
                        <th>Average Grade</th>
                        <th>Curriculum / Occupation</th>
                        <th>Actions</th>
                    </tr>
                    </thead>

                    <tbody class="middle-align">

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Randy S. Smith</td>
                        <td>8.7</td>
                        <td>Social and human service</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Ellen C. Jones</td>
                        <td>7.2</td>
                        <td>Education and development manager</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Carl D. Kaya</td>
                        <td>9.5</td>
                        <td>Express Merchant Service</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Jennifer J. Jefferson</td>
                        <td>10</td>
                        <td>Maxillofacial surgeon</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>April L. Baker <span class="label label-success">New Applicant</span></td>
                        <td>6.8</td>
                        <td>Set and exhibit designer</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Lillian J. Earl</td>
                        <td>7.6</td>
                        <td>Social and human service assistant</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Ellen C. Jones</td>
                        <td>7.2</td>
                        <td>Education and development manager</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Randy S. Smith</td>
                        <td>8.7</td>
                        <td>Social and human service</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Jennifer J. Jefferson</td>
                        <td>10</td>
                        <td>Maxillofacial surgeon</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Carl D. Kaya</td>
                        <td>9.5</td>
                        <td>Express Merchant Service</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Lillian J. Earl</td>
                        <td>7.6</td>
                        <td>Social and human service assistant</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>April L. Baker <span class="label label-success">New Applicant</span></td>
                        <td>6.8</td>
                        <td>Set and exhibit designer</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Randy S. Smith</td>
                        <td>8.7</td>
                        <td>Social and human service</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Ellen C. Jones</td>
                        <td>7.2</td>
                        <td>Education and development manager</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Carl D. Kaya</td>
                        <td>9.5</td>
                        <td>Express Merchant Service</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Jennifer J. Jefferson</td>
                        <td>10</td>
                        <td>Maxillofacial surgeon</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>April L. Baker <span class="label label-success">New Applicant</span></td>
                        <td>6.8</td>
                        <td>Set and exhibit designer</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Lillian J. Earl</td>
                        <td>7.6</td>
                        <td>Social and human service assistant</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Ellen C. Jones</td>
                        <td>7.2</td>
                        <td>Education and development manager</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Randy S. Smith</td>
                        <td>8.7</td>
                        <td>Social and human service</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Jennifer J. Jefferson</td>
                        <td>10</td>
                        <td>Maxillofacial surgeon</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Carl D. Kaya</td>
                        <td>9.5</td>
                        <td>Express Merchant Service</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Lillian J. Earl</td>
                        <td>7.6</td>
                        <td>Social and human service assistant</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>April L. Baker <span class="label label-success">New Applicant</span></td>
                        <td>6.8</td>
                        <td>Set and exhibit designer</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Randy S. Smith</td>
                        <td>8.7</td>
                        <td>Social and human service</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Ellen C. Jones</td>
                        <td>7.2</td>
                        <td>Education and development manager</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Carl D. Kaya</td>
                        <td>9.5</td>
                        <td>Express Merchant Service</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Jennifer J. Jefferson</td>
                        <td>10</td>
                        <td>Maxillofacial surgeon</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>April L. Baker <span class="label label-success">New Applicant</span></td>
                        <td>6.8</td>
                        <td>Set and exhibit designer</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Lillian J. Earl</td>
                        <td>7.6</td>
                        <td>Social and human service assistant</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Ellen C. Jones</td>
                        <td>7.2</td>
                        <td>Education and development manager</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Randy S. Smith</td>
                        <td>8.7</td>
                        <td>Social and human service</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Jennifer J. Jefferson</td>
                        <td>10</td>
                        <td>Maxillofacial surgeon</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Carl D. Kaya</td>
                        <td>9.5</td>
                        <td>Express Merchant Service</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Lillian J. Earl</td>
                        <td>7.6</td>
                        <td>Social and human service assistant</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>April L. Baker <span class="label label-success">New Applicant</span></td>
                        <td>6.8</td>
                        <td>Set and exhibit designer</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Randy S. Smith</td>
                        <td>8.7</td>
                        <td>Social and human service</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Ellen C. Jones</td>
                        <td>7.2</td>
                        <td>Education and development manager</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Carl D. Kaya</td>
                        <td>9.5</td>
                        <td>Express Merchant Service</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Jennifer J. Jefferson</td>
                        <td>10</td>
                        <td>Maxillofacial surgeon</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>April L. Baker <span class="label label-success">New Applicant</span></td>
                        <td>6.8</td>
                        <td>Set and exhibit designer</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Lillian J. Earl</td>
                        <td>7.6</td>
                        <td>Social and human service assistant</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Ellen C. Jones</td>
                        <td>7.2</td>
                        <td>Education and development manager</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Randy S. Smith</td>
                        <td>8.7</td>
                        <td>Social and human service</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Jennifer J. Jefferson</td>
                        <td>10</td>
                        <td>Maxillofacial surgeon</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Carl D. Kaya</td>
                        <td>9.5</td>
                        <td>Express Merchant Service</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Lillian J. Earl</td>
                        <td>7.6</td>
                        <td>Social and human service assistant</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>April L. Baker <span class="label label-success">New Applicant</span></td>
                        <td>6.8</td>
                        <td>Set and exhibit designer</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Randy S. Smith</td>
                        <td>8.7</td>
                        <td>Social and human service</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Ellen C. Jones</td>
                        <td>7.2</td>
                        <td>Education and development manager</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Carl D. Kaya</td>
                        <td>9.5</td>
                        <td>Express Merchant Service</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Jennifer J. Jefferson</td>
                        <td>10</td>
                        <td>Maxillofacial surgeon</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>April L. Baker <span class="label label-success">New Applicant</span></td>
                        <td>6.8</td>
                        <td>Set and exhibit designer</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Lillian J. Earl</td>
                        <td>7.6</td>
                        <td>Social and human service assistant</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Ellen C. Jones</td>
                        <td>7.2</td>
                        <td>Education and development manager</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Randy S. Smith</td>
                        <td>8.7</td>
                        <td>Social and human service</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Jennifer J. Jefferson</td>
                        <td>10</td>
                        <td>Maxillofacial surgeon</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Carl D. Kaya</td>
                        <td>9.5</td>
                        <td>Express Merchant Service</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>Lillian J. Earl</td>
                        <td>7.6</td>
                        <td>Social and human service assistant</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="cbr">
                        </td>
                        <td>April L. Baker <span class="label label-success">New Applicant</span></td>
                        <td>6.8</td>
                        <td>Set and exhibit designer</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Edit
                            </a>

                            <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Delete
                            </a>

                            <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                Profile
                            </a>
                        </td>
                    </tr>

                    </tbody>
                </table>

            </div>
        </div>

        @extends("admin.layouts.chat")

        <!-- Imported styles on this page -->
        <link rel="stylesheet" href="{{asset('js/datatables/dataTables.bootstrap.css')}}">

        <!-- Bottom Scripts -->
        <script src="{{asset('js/datatables/js/jquery.dataTables.min.js')}}"></script>

        <!-- Imported scripts on this page -->
        <script src="{{asset('js/datatables/dataTables.bootstrap.js')}}"></script>
        <script src="{{asset('js/datatables/yadcf/jquery.dataTables.yadcf.js')}}"></script>
        <script src="{{asset('js/datatables/tabletools/dataTables.tableTools.min.js')}}"></script>

    @endsection