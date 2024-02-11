<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/_dashboard.css">
    <?php require_once './headers.php' ?>
</head>

<body class="p-0">
    <?php 
        $pageTitle = "USER MANAGEMENT";
        $subPageTitle = "User Profiles";
        include 'navbar.php';
 ?>
    <div class="dashboard">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                    type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Travelers</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="hotels-tab" data-bs-toggle="tab" data-bs-target="#hotels-tab-pane"
                    type="button" role="tab" aria-controls="hotels-tab-pane" aria-selected="false">Hotels</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="restaurants-tab" data-bs-toggle="tab"
                    data-bs-target="#restaurants-tab-pane" type="button" role="tab" aria-controls="restaurants-tab-pane"
                    aria-selected="false">Restaurants</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <!-- travelers tab -->
            <div class="tab-pane fade p-5 show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                tabindex="0">
                <div class="d-flex align-items-center justify-content-between">
                    <!-- search tab -->
                    <form action="" method="post" class="col-7 col-lg-5">
                        <input type="text" placeholder="Search.." class="form-control">
                    </form>
                    <!-- add button -->
                    <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addCustomer">Add</button>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="addCustomer" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg rounded-0">
                        <div class="modal-content rounded-0">
                            <div class="modal-header bg-dark text-white rounded-0">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                                <button type="button" class="btn btn-dark text-white" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                            </div>
                            <div class="modal-body">

                            </div>
                        </div>
                    </div>
                </div>

                <!-- table 1 -->
                <div class="table-responsive py-3" style="min-height: 300px;">
                    <table class="table table-white table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>USERNAME</th>
                                <th>FULL NAME</th>
                                <th>EMAIL</th>
                                <th>ROLE</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>

                <!-- table 2 -->
                <div class="table-responsive py-3" style="min-height: 300px;">
                    <table class="table table-white table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>CUSTOMER NAME</th>
                                <th>RESTAURANT NAME</th>
                                <th>FROM DATE</th>
                                <th>TO DATE</th>
                                <th>STATUS</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Hotels tab -->
            <div class="tab-pane fade p-5" id="hotels-tab-pane" role="tabpanel" aria-labelledby="hotels-tab"
                tabindex="0">

            </div>


            <!-- Restaurants tab -->
            <div class="tab-pane fade p-5" id="restaurants-tab-pane" role="tabpanel" aria-labelledby="restaurants-tab"
                tabindex="0">

            </div>
        </div>
    </div>

    <script>
        // Change title
        (() => {
            let state = !0;
            const changeTitle = () => {
                document.title = state ? 'Adventours' : 'User Management';
                state = !state;
            }
            changeTitle();
            setInterval(() => {
                changeTitle()
            }, 1000)
        })();
    </script>

</body>

</html>